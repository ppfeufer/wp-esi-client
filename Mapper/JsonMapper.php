<?php

/**
 * Copyright (C) 2017 Rounon Dax
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

namespace WordPress\EsiClient\Mapper;

use \Exception;
use \InvalidArgumentException;
use \Psr\Log\LoggerInterface;
use \ReflectionClass;
use \ReflectionProperty;

/**
 * Part of JsonMapper
 *
 * @category Netresearch
 * @package  JsonMapper
 * @author   Christian Weiske <cweiske@cweiske.de>
 * @license  OSL-3.0 http://opensource.org/licenses/osl-3.0
 * @link     http://cweiske.de/
 */

/**
 * Automatically map JSON structures into objects.
 *
 * @category Netresearch
 * @package  JsonMapper
 * @author   Christian Weiske <cweiske@cweiske.de>
 * @license  OSL-3.0 http://opensource.org/licenses/osl-3.0
 * @link     http://cweiske.de/
 */
class JsonMapper {
    /**
     * PSR-3 compatible logger object
     *
     * @link http://www.php-fig.org/psr/psr-3/
     * @var  object
     * @see  $this->setLogger()
     */
    protected $logger;

    /**
     * Throw an exception when JSON data contain a property
     * that is not defined in the PHP class
     *
     * @var boolean
     */
    public $bExceptionOnUndefinedProperty = false;

    /**
     * Throw an exception if the JSON data miss a property
     * that is marked with @required in the PHP class
     *
     * @var boolean
     */
    public $bExceptionOnMissingData = false;

    /**
     * If the types of $this->map() parameters shall be checked.
     *
     * You have to disable it if you're using the \json_decode "assoc" parameter.
     *
     *     \json_decode($str, false)
     *
     * @var boolean
     */
    public $bEnforceMapType = true;

    /**
     * Throw an exception when an object is expected but the JSON contains
     * a non-object type.
     *
     * @var boolean
     */
    public $bStrictObjectTypeChecking = false;

    /**
     * Throw an exception, if null value is found
     * but the type of attribute does not allow nulls.
     *
     * @var bool
     */
    public $bStrictNullTypes = true;

    /**
     * Allow mapping of private and proteted properties.
     *
     * @var boolean
     */
    public $bIgnoreVisibility = true;

    /**
     * Override class names that JsonMapper uses to create objects.
     * Useful when your setter methods accept abstract classes or interfaces.
     *
     * @var array
     */
    public $classMap = [];

    /**
     * Callback used when an undefined property is found.
     *
     * Works only when $bExceptionOnUndefinedProperty is disabled.
     *
     * Parameters to this function are:
     * 1. Object that is being filled
     * 2. Name of the unknown JSON property
     * 3. JSON value of the property
     *
     * @var callable
     */
    public $undefinedPropertyHandler = null;

    /**
     * Runtime cache for inspected classes. This is particularly effective if
     * $this->mapArray() is called with a large number of objects
     *
     * @var array property inspection result cache
     */
    protected $arInspectedClasses = [];

    /**
     * Map data all data in $json into the given $object instance.
     *
     * @param object $json   JSON object structure from json_decode()
     * @param object $object Object to map $json data into
     *
     * @return object Mapped object is returned.
     * @see    $this->mapArray()
     */
    public function map($json, $object) {
        if($this->bEnforceMapType && !\is_object($json)) {
            throw new InvalidArgumentException('JsonMapper::map() requires first argument to be an object, ' . \gettype($json) . ' given.');
        }

        if(!\is_object($object)) {
            throw new InvalidArgumentException('JsonMapper::map() requires second argument to be an object, ' . \gettype($object) . ' given.');
        }

        $strClassName = \get_class($object);
        $rc = new ReflectionClass($object);
        $strNs = $rc->getNamespaceName();
        $providedProperties = [];

        foreach($json as $key => $jvalue) {
            $key = $this->getSafeName($key);
            $providedProperties[$key] = true;

            // Store the property inspection results so we don't have to do it
            // again for subsequent objects of the same type
            if(!isset($this->arInspectedClasses[$strClassName][$key])) {
                $this->arInspectedClasses[$strClassName][$key] = $this->inspectProperty($rc, $key);
            }

            list($hasProperty, $accessor, $type) = $this->arInspectedClasses[$strClassName][$key];

            if(!$hasProperty) {
                $isHandled = false;

                if($this->bExceptionOnUndefinedProperty) {
                    $isHandled = true;
                    throw new Exception('JSON property "' . $key . '" does not exist in object of type ' . $strClassName);
                } else if($this->undefinedPropertyHandler !== null) {
                    $isHandled = true;

                    \call_user_func(
                        $this->undefinedPropertyHandler, $object, $key, $jvalue
                    );
                }

                if($isHandled === false) {
                    $this->log('info', 'Property {property} does not exist in {class}', ['property' => $key, 'class' => $strClassName]);
                }

                continue;
            }

            if($accessor === null) {
                if($this->bExceptionOnUndefinedProperty) {
                    throw new Exception('JSON property "' . $key . '" has no public setter method in object of type ' . $strClassName);
                }

                $this->log('info', 'Property {property} has no public setter method in {class}', ['property' => $key, 'class' => $strClassName]);

                continue;
            }

            if($this->isNullable($type) || !$this->bStrictNullTypes) {
                if($jvalue === null) {
                    $this->setProperty($object, $accessor, null);

                    continue;
                }

                $type = $this->removeNullable($type);
            } else if($jvalue === null) {
                throw new Exception('JSON property "' . $key . '" in class "' . $strClassName . '" must not be NULL');
            }

            if($type === null || $type === 'mixed') {
                // no given type - simply set the json data
                $this->setProperty($object, $accessor, $jvalue);

                continue;
            } else if($this->isObjectOfSameType($type, $jvalue)) {
                $this->setProperty($object, $accessor, $jvalue);

                continue;
            } else if($this->isSimpleType($type)) {
                if($type === 'string' && \is_object($jvalue)) {
                    throw new Exception('JSON property "' . $key . '" in class "' . $strClassName . '" is an object and cannot be converted to a string');
                }

                \settype($jvalue, $type);

                $this->setProperty($object, $accessor, $jvalue);

                continue;
            }

            // FIXME: check if type exists, give detailed error message if not
            if($type === '') {
                throw new Exception('Empty type at property "' . $strClassName . '::$' . $key . '"');
            }

            $array = null;
            $subtype = null;

            if($this->isArrayOfType($type)) {
                // array
                $array = [];
                $subtype = \substr($type, 0, -2);
            } else if(\substr($type, -1) === ']') {
                list($proptype, $subtype) = \explode('[', \substr($type, 0, -1));

                if(!$this->isSimpleType($proptype)) {
                    $proptype = $this->getFullNamespace($proptype, $strNs);
                }

                $array = [];
                if($proptype !== 'array') {
                    $array = $this->createInstance($proptype, false, $jvalue);
                }
            } else {
                $type = $this->getFullNamespace($type, $strNs);

                if(\is_a($type, 'ArrayObject', true)) {
                    $array = $this->createInstance($type, false, $jvalue);
                }
            }

            if($array !== null) {
                if(!\is_array($jvalue) && $this->isFlatType(\gettype($jvalue))) {
                    throw new Exception('JSON property "' . $key . '" must be an array, ' . \gettype($jvalue) . ' given');
                }

                $cleanSubtype = $this->removeNullable($subtype);

                if(!$this->isSimpleType($cleanSubtype) && $cleanSubtype !== null) {
                    $subtype = $this->getFullNamespace($cleanSubtype, $strNs);
                }

                $child = $this->mapArray($jvalue, $array, $subtype, $key);
            } else if($this->isFlatType(\gettype($jvalue))) {
                // use constructor parameter if we have a class
                // but only a flat type (i.e. string, int)
                if($this->bStrictObjectTypeChecking) {
                    throw new Exception('JSON property "' . $key . '" must be an object, ' . \gettype($jvalue) . ' given');
                }

                $type = $this->getFullNamespace($type, $strNs);
                $child = $this->createInstance($type, true, $jvalue);
            } else {
                $type = $this->getFullNamespace($type, $strNs);
                $child = $this->createInstance($type, false, $jvalue);
                $this->map($jvalue, $child);
            }

            $this->setProperty($object, $accessor, $child);
        }

        if($this->bExceptionOnMissingData) {
            $this->checkMissingData($providedProperties, $rc);
        }

        return $object;
    }

    /**
     * Convert a type name to a fully namespaced type name.
     *
     * @param string $type  Type name (simple type or class name)
     * @param string $strNs Base namespace that gets prepended to the type name
     *
     * @return string Fully-qualified type name with namespace
     */
    protected function getFullNamespace(string $type, string $strNs) {
        if($type !== '' && $type[0] !== '\\') {
            // create a full qualified namespace
            if($strNs !== '') {
                $type = '\\' . $strNs . '\\' . $type;
            }
        }
        return $type;
    }

    /**
     * Check required properties exist in json
     *
     * @param array $providedProperties array with json properties
     * @param ReflectionClass $rc Reflection class to check
     *
     * @throws Exception
     *
     * @return void
     */
    protected function checkMissingData(array $providedProperties, ReflectionClass $rc) {
        foreach($rc->getProperties() as $property) {
            $rprop = $rc->getProperty($property->name);
            $docblock = $rprop->getDocComment();
            $annotations = $this->parseAnnotations($docblock);

            if(isset($annotations['required']) && !isset($providedProperties[$property->name])) {
                throw new Exception('Required property "' . $property->name . '" of class ' . $rc->getName() . ' is missing in JSON data');
            }
        }
    }

    /**
     * Map an array
     *
     * @param array  $json       JSON array structure from \json_decode()
     * @param mixed  $array      Array or ArrayObject that gets filled with
     *                           data from $json
     * @param string $class      Class name for children objects.
     *                           All children will get mapped onto this type.
     *                           Supports class names and simple types
     *                           like "string" and nullability "string|null".
     *                           Pass "null" to not convert any values
     * @param string $parent_key Defines the key this array belongs to
     *                           in order to aid debugging.
     *
     * @return mixed Mapped $array is returned
     */
    public function mapArray(array $json, $array, $class = null, string $parent_key = '') {
        foreach($json as $key => $jvalue) {
            if($class === null) {
                $array[$key] = $jvalue;
            } else if($this->isArrayOfType($class)) {
                $array[$key] = $this->mapArray(
                    $jvalue, [], \substr($class, 0, -2)
                );
            } else if($this->isFlatType(\gettype($jvalue))) {
                // use constructor parameter if we have a class
                // but only a flat type (i.e. string, int)
                if($jvalue === null) {
                    $array[$key] = null;
                } else {
                    if($this->isSimpleType($class)) {
                        \settype($jvalue, $class);

                        $array[$key] = $jvalue;
                    } else {
                        $array[$key] = $this->createInstance($class, true, $jvalue);
                    }
                }
            } else if($this->isFlatType($class)) {
                throw new Exception('JSON property "' . ($parent_key ? $parent_key : '?') . '" is an array of type "' . $class . '" but contained a value of type "' . \gettype($jvalue) . '"');
            } else if(\is_a($class, 'ArrayObject', true)) {
                $array[$key] = $this->mapArray(
                    $jvalue, $this->createInstance($class)
                );
            } else {
                $array[$key] = $this->map(
                    $jvalue, $this->createInstance($class, false, $jvalue)
                );
            }
        }

        return $array;
    }

    /**
     * Try to find out if a property exists in a given class.
     * Checks property first, falls back to setter method.
     *
     * @param ReflectionClass $rc   Reflection class to check
     * @param string $name Property name
     *
     * @return array First value: if the property exists
     *               Second value: the accessor to use (
     *                 ReflectionMethod or ReflectionProperty, or null)
     *               Third value: type of the property
     */
    protected function inspectProperty(ReflectionClass $rc, string $name) {
        // try setter method first
        $setter = 'set' . $this->getCamelCaseName($name);

        if($rc->hasMethod($setter)) {
            $rmeth = $rc->getMethod($setter);

            if($rmeth->isPublic() || $this->bIgnoreVisibility) {
                $rparams = $rmeth->getParameters();

                if(\count($rparams) > 0) {
                    $pclass = $rparams[0]->getClass();
                    $nullability = '';

                    if($rparams[0]->allowsNull()) {
                        $nullability = '|null';
                    }

                    if($pclass !== null) {
                        return [
                            true,
                            $rmeth,
                            '\\' . $pclass->getName() . $nullability
                        ];
                    }
                }

                $docblock = $rmeth->getDocComment();
                $annotations = $this->parseAnnotations($docblock);

                if(!isset($annotations['param'][0])) {
                    // If there is no annotations (higher priority) inspect
                    // if there's a scalar type being defined
                    if(\PHP_MAJOR_VERSION >= 7) {
                        $ptype = $rparams[0]->getType();

                        if($ptype !== null) {
                            return [
                                true,
                                $rmeth,
                                $ptype .
                                $nullability
                            ];
                        }
                    }

                    return [
                        true,
                        $rmeth,
                        null
                    ];
                }

                list($type) = \explode(' ', \trim($annotations['param'][0]));

                return [
                    true,
                    $rmeth,
                    $type
                ];
            }
        }

        // now try to set the property directly
        // we have to look it up in the class hierarchy
        $class = $rc;
        $rprop = null;

        do {
            if($class->hasProperty($name)) {
                $rprop = $class->getProperty($name);
            }
        } while($rprop === null && $class = $class->getParentClass());

        if($rprop === null) {
            // case-insensitive property matching
            foreach($rc->getProperties() as $p) {
                if((\strcasecmp($p->name, $name) === 0)) {
                    $rprop = $p;
                    break;
                }
            }
        }

        if($rprop !== null) {
            if($rprop->isPublic() || $this->bIgnoreVisibility) {
                $docblock = $rprop->getDocComment();
                $annotations = $this->parseAnnotations($docblock);

                if(!isset($annotations['var'][0])) {
                    return [
                        true,
                        $rprop,
                        null
                    ];
                }

                // support "@var type description"
                list($type) = \explode(' ', $annotations['var'][0]);

                return [
                    true,
                    $rprop,
                    $type
                ];
            } else {
                // no setter, private property
                return [
                    true,
                    null,
                    null
                ];
            }
        }

        // no setter, no property
        return [
            false,
            null,
            null
        ];
    }

    /**
     * Removes - and _ and makes the next letter uppercase
     *
     * @param string $name Property name
     *
     * @return string CamelCasedVariableName
     */
    protected function getCamelCaseName(string $name) {
        return \str_replace(' ', '', \ucwords(\str_replace(['_', '-'], ' ', $name)));
    }

    /**
     * Since hyphens cannot be used in variables we have to uppercase them.
     *
     * Technically you may use them, but they are awkward to access.
     *
     * @param string $name Property name
     *
     * @return string Name without hyphen
     */
    protected function getSafeName(string $name) {
        if(\strpos($name, '-') !== false) {
            $name = $this->getCamelCaseName($name);
        }

        return $name;
    }

    /**
     * Set a property on a given object to a given value.
     *
     * Checks if the setter or the property are public are made before
     * calling this method.
     *
     * @param object $object   Object to set property on
     * @param object $accessor ReflectionMethod or ReflectionProperty
     * @param mixed  $value    Value of property
     *
     * @return void
     */
    protected function setProperty($object, $accessor, $value) {
        if(!$accessor->isPublic() && $this->bIgnoreVisibility) {
            $accessor->setAccessible(true);
        }

        if($accessor instanceof ReflectionProperty) {
            $accessor->setValue($object, $value);
        } else {
            // setter method
            $accessor->invoke($object, $value);
        }
    }

    /**
     * Create a new object of the given type.
     *
     * This method exists to be overwritten in child classes,
     * so you can do dependency injection or so.
     *
     * @param string $class        Class name to instantiate
     * @param bool $useParameter Pass $parameter to the constructor or not
     * @param mixed $jvalue       Constructor parameter (the json value)
     *
     * @return object Freshly created object
     */
    public function createInstance(string $class, bool $useParameter = false, $jvalue = null) {
        if(isset($this->classMap[$class])) {
            $isCallable = false;

            if(\is_callable($mapper = $this->classMap[$class])) {
                $isCallable = true;
                $class = $mapper($class, $jvalue);
            }

            if($isCallable === false) {
                $class = $this->classMap[$class];
            }
        }

        if($useParameter === true) {
            return new $class($jvalue);
        }

        return (new ReflectionClass($class))->newInstanceWithoutConstructor();
    }

    /**
     * Checks if the given type is a "simple type"
     *
     * @param string $type type name from \gettype()
     *
     * @return boolean True if it is a simple PHP type
     *
     * @see $this->isFlatType()
     */
    protected function isSimpleType(string $type) {
        return $type == 'string' || $type == 'boolean' || $type == 'bool' || $type == 'integer' || $type == 'int' || $type == 'double' || $type == 'float' || $type == 'array' || $type == 'object';
    }

    /**
     * Checks if the object is of this type or has this type as one of its parents
     *
     * @param string $type  class name of type being required
     * @param mixed  $value Some PHP value to be tested
     *
     * @return boolean True if $object has type of $type
     */
    protected function isObjectOfSameType(string $type, $value) {
        if(false === \is_object($value)) {
            return false;
        }

        return \is_a($value, $type);
    }

    /**
     * Checks if the given type is a type that is not nested
     * (simple type except array and object)
     *
     * @param string $type type name from \gettype()
     *
     * @return boolean True if it is a non-nested PHP type
     *
     * @see $this->isSimpleType()
     */
    protected function isFlatType(string $type) {
        return $type == 'NULL' || $type == 'string' || $type == 'boolean' || $type == 'bool' || $type == 'integer' || $type == 'int' || $type == 'double' || $type == 'float';
    }

    /**
     * Returns true if type is an array of elements
     * (bracket notation)
     *
     * @param string $strType type to be matched
     *
     * @return bool
     */
    protected function isArrayOfType(string $strType) {
        return \substr($strType, -2) === '[]';
    }

    /**
     * Checks if the given type is nullable
     *
     * @param string $type type name from the phpdoc param
     *
     * @return boolean True if it is nullable
     */
    protected function isNullable(string $type) {
        return \stripos('|' . $type . '|', '|null|') !== false;
    }

    /**
     * Remove the 'null' section of a type
     *
     * @param string $type type name from the phpdoc param
     *
     * @return string The new type value
     */
    protected function removeNullable(string $type) {
        if($type === null) {
            return null;
        }

        return \substr(\str_ireplace('|null|', '|', '|' . $type . '|'), 1, -1);
    }

    /**
     * Copied from PHPUnit 3.7.29, Util/Test.php
     *
     * @param string $docblock Full method docblock
     *
     * @return array
     */
    protected function parseAnnotations(string $docblock) {
        $annotations = [];
        // Strip away the docblock header and footer
        // to ease parsing of one line annotations
        $docblock = \substr($docblock, 3, -2);

        $re = '/@(?P<name>[A-Za-z_-]+)(?:[ \t]+(?P<value>.*?))?[ \t]*\r?$/m';

        if(\preg_match_all($re, $docblock, $matches)) {
            $numMatches = \count($matches[0]);

            for($i = 0; $i < $numMatches; ++$i) {
                $annotations[$matches['name'][$i]][] = $matches['value'][$i];
            }
        }

        return $annotations;
    }

    /**
     * Log a message to the $logger object
     *
     * @param string $level   Logging level
     * @param string $message Text to log
     * @param array  $context Additional information
     *
     * @return null
     */
    protected function log(string $level, string $message, array $context = []) {
        if($this->logger) {
            $this->logger->log($level, $message, $context);
        }
    }

    /**
     * Sets a logger instance on the object
     *
     * @param LoggerInterface $logger PSR-3 compatible logger object
     *
     * @return null
     */
    public function setLogger($logger) {
        $this->logger = $logger;
    }
}
