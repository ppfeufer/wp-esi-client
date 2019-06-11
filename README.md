# ESI Client for WordPress

A simple and lightweight ESI client that can be used in WordPress plugins and provides access to the public ESI endpoints. Meaning, the endpoints that don't requiere any form of authentication.

To use this in your WordPress plugin, make sure your plugin fetches the master.zip file from this repo and extracts it, preferrably into `/wp-content/EsiClient`.

## Requirements
- PHP 7.2 or newer
- WordPress 5.0 or newer
- mySQL `max_allowed_packet=10M` or more

## How To
Make sure that you implement a method in you register_activation_hook that checks the Esi Client version to the one you are using in your plugin.

### Preparation in your plugin
To do so, first define a variable/constand that holds the Esi Client version you are using.

```php
$esiClientVersion = 20181005;
```

### Hook it up with WordPress
Now you need to make sure WordPress is checking if the ESI client is locally available in at least the version you are using.

```php
// on plugin activation from plugin management (Activate Link)
register_activation_hook($this->pluginFile, 'checkEsiClientForUpdates');

// This needs to be added because the activbation hook is not fired on
// plugin updates, so it needs to be checked every time the plugin is loaded
add_action('plugins_loaded', 'checkEsiClientForUpdates');
```

With these 2 lines you make sure your plugin is calling the `checkEsiClientForUpdates` function on activation and every time the plugin is loaded. The second line is needed because the activation hook is not called on plugin updates.

### The Update Function(s)
With your hooks and actions registered, you now need the update function. This is a multiple step process.

#### Check if an update is needed
First we call a general update check function to check if an update is actually needed.

```php
function checkEsiClientForUpdates() {
    // import your plugins desired ESI client version or set it here, what ever you like
    global $esiClientVersion;

    // this is to make sure that if the ESI client doesn't exist locally
    // it gets downloaded and installed
    $esiClientCurrentVersion = null;

    if(class_exists('\WordPress\EsiClient\Swagger')) {
        $esiClient = new \WordPress\EsiClient\Swagger;
        $esiClientCurrentVersion = $esiClient->getEsiClientVersion();
    }

    /**
     * Check if the current ESI client needs to be updated
     */
    if(version_compare($esiClientCurrentVersion, $esiClientVersion) < 0) {
        updateEsiClient($esiClientVersion);
    }
}
```

#### Update
Now the actual update function ...

```php
function updateEsiClient(string $version = null) {
    // check if ZipArchive is available
    $hasZipArchive = (class_exists('ZipArchive')) ? true : false;

    $remoteZipFile = 'https://github.com/ppfeufer/wp-esi-client/archive/master.zip';
    $dirInZipFile = '/wp-esi-client-master';

    if(!is_null($version)) {
        $remoteZipFile = 'https://github.com/ppfeufer/wp-esi-client/archive/v' . $version . '.zip';
        $dirInZipFile = '/wp-esi-client-' . $version;
    }

    $esiClientZipFile = WP_CONTENT_DIR . '/uploads/EsiClient.zip';

    wp_remote_get($remoteZipFile, [
        'timeout' => 300,
        'stream' => true,
        'filename' => $esiClientZipFile
    ]);

    // remove an older local version of the ESI client
    if(is_dir(WP_CONTENT_DIR . '/EsiClient/')) {
        $this->rrmdir(WP_CONTENT_DIR . '/EsiClient/');
    }

    // extract using ZipArchive
    if($hasZipArchive === true) {
        $zip = new ZipArchive;

        if(!$zip->open($esiClientZipFile)) {
            throw new Exception('PHP-ZIP: Unable to open the Esi Client zip file');
        }

        if(!$zip->extractTo(WP_CONTENT_DIR)) {
            throw new Exception('PHP-ZIP: Unable to extract Esi Client zip file');
        }

        $zip->close();
    }

    // extract using PclZip
    if($hasZipArchive === false) {
        require_once(ABSPATH . 'wp-admin/includes/class-pclzip.php');

        $zip = new PclZip($esiClientZipFile);

        if(!$zip->extract(PCLZIP_OPT_PATH, WP_CONTENT_DIR)) {
            throw new Exception('PHP-ZIP: Unable to extract Esi Client zip file');
        }
    }

    // rename folder
    rename(\WP_CONTENT_DIR . $dirInZipFile, \WP_CONTENT_DIR . '/EsiClient/');

    // remove temp zip file
    unlink($esiClientZipFile);
}
```

#### Helper
We also need a little helper function in order to remove the old ESI client directory.

```php
function rrmdir(string $dir) {
    if(is_dir($dir)) {
        $objects = scandir($dir);

        foreach($objects as $object) {
            if($object != "." && $object != "..") {
                if(is_dir($dir . "/" . $object)) {
                    $this->rrmdir($dir . "/" . $object);
                } else {
                    unlink($dir . "/" . $object);
                }
            }
        }

        rmdir($dir);
    }
}
```

### Use in your Plugin
#### Autoloader
You have to make sure that the ESI classes will be loaded when you call them

```php
/**
 * Autoloading ESI classes
 */
\spl_autoload_register('autoloadEsiClient');

function autoloadEsiClient($className) {
    // If the specified $className does not include our namespace, duck out.
    if(strpos($className, 'WordPress\EsiClient') === false) {
        return;
    }

    // Split the class name into an array to read the namespace and class.
    $fileParts = explode('\\', $className);

    // Do a reverse loop through $fileParts to build the path to the file.
    $namespace = '';
    for($i = count($fileParts) - 1; $i > 0; $i--) {
        // Read the current component of the file part.
        $current = str_ireplace('_', '-', $fileParts[$i]);

        $namespace = '/' . $current . $namespace;

        // If we're at the first entry, then we're at the filename.
        if(count($fileParts) - 1 === $i) {
            $namespace = '';
            $fileName = $current . '.php';

            /* If 'interface' is contained in the parts of the file name, then
             * define the $file_name differently so that it's properly loaded.
             * Otherwise, just set the $file_name equal to that of the class
             * filename structure.
             */
            if(strpos(strtolower($fileParts[count($fileParts) - 1]), 'interface')) {
                // Grab the name of the interface from its qualified name.
                $interfaceNameParts = explode('_', $fileParts[count($fileParts) - 1]);
                $interfaceName = $interfaceNameParts[0];

                $fileName = $interfaceName . '.php';
            }
        }

        // Now build a path to the file using mapping to the file location.
        $filepath = trailingslashit(WP_CONTENT_DIR . '/EsiClient' . $namespace);
        $filepath .= $fileName;

        // If the file exists in the specified path, then include it.
        if(file_exists($filepath)) {
            include_once($filepath);
        }
    }
}
```

#### Work with the Esi client
This ESI client has a couple of Repository classes that will do all themagic for you. You just have to call them and, if needed, give them some arguments.

Example for getting alliance information from an alliance ID:

```php
$allianceApi = new \WordPress\EsiClient\Repository\AllianceRepository;
$allianceData = $allianceApi->alliancesAllianceId($allianceId)
```

Now `$allianceData` is a nice `\WordPress\EsiClient\Model\Alliance\AlliancesAllianceId` Model which provides you with the needed getter methods.

```php
// get alliance name
echo $allianceData->getName();

// get alliance ticker
echo $allianceData->getTicker();
```

And so on.
