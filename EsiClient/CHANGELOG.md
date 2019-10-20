
# Change Log

## [In Development](https://github.com/ppfeufer/wp-esi-client/tree/development)
[Full Changelog](https://github.com/ppfeufer/wp-esi-client/compare/v20190611...development)
- in development

## [v20190611](https://github.com/ppfeufer/wp-esi-client/tag/v20190611) - 2019-06-11
[Full Changelog](https://github.com/ppfeufer/wp-esi-client/compare/v20190311...v20190611)
### Changed
- Complete rewrite of all Modells and Repositories. **!! This is a breaking change !!**

## [v20190311](https://github.com/ppfeufer/wp-esi-client/tag/v20190311) - 2019-03-11
[Full Changelog](https://github.com/ppfeufer/wp-esi-client/compare/v20190201...v20190311)
### Changed
- UniverseNames promoted to v3 - https://github.com/esi/esi-issues/compare/esi:bf95f69...esi:d748435

## [v20190201](https://github.com/ppfeufer/wp-esi-client/tag/v20190201) - 2019-02-01
[Full Changelog](https://github.com/ppfeufer/wp-esi-client/compare/v20190109...v20190201)
### Added
- UniverseNames Model
- Errorhandling now returning an error object in case of an error instead of nothing

## [v20190109](https://github.com/ppfeufer/wp-esi-client/tag/v20190109) - 2019-01-09
[Full Changelog](https://github.com/ppfeufer/wp-esi-client/compare/v20181226...v20190109)
### Added
- Incursions
- Insurance
- Language support to endpoints
- Getter method to obtain the current client version > ``getEsiClientVersion()`` instead of ``client_version`` file, which will be removed later on

### Changed
- More strict namespacing

## [v20181226](https://github.com/ppfeufer/wp-esi-client/tag/v20181226) - 2018-12-26
[Full Changelog](https://github.com/ppfeufer/wp-esi-client/compare/v20181202...v20181226)
### Added
- Model for universe/categories/category_id added » https://esi.evetech.net/ui#/Universe/get_universe_categories_category_id

## [v20181202](https://github.com/ppfeufer/wp-esi-client/tag/v20181202) - 2018-12-02
[Full Changelog](https://github.com/ppfeufer/wp-esi-client/compare/v20181125...v20181202)
### Added
- Model for status endpoint » https://esi.evetech.net/ui?version=meta#/Meta/get_status

## [v20181125](https://github.com/ppfeufer/wp-esi-client/tag/v20181123) - 2018-11-25
[Full Changelog](https://github.com/ppfeufer/wp-esi-client/compare/v20181123...v20181125)
### Changed
- Some improvements and code cleanup

## [v20181123](https://github.com/ppfeufer/wp-esi-client/tag/v20181123) - 2018-11-23
[Full Changelog](https://github.com/ppfeufer/wp-esi-client/compare/v20181122...v20181123)
### Added
- Alliances Model
- DogmaAttributes Model
- DogmaEffects Model
- factionId to AlliancesAllianceId Model
- factionId and allianceId to CharactersCharacterId Model

### Changed
- Setter should be protected. In order to prevent tempering with our ESI objects, setter should be protected so accidentally accessing them is not possible.

### Fixed
- Catching null values in case ESI or a certain end point is down

## [v20181122](https://github.com/ppfeufer/wp-esi-client/tag/v20181122) - 2018-11-22
[Full Changelog](https://github.com/ppfeufer/wp-esi-client/compare/v20181005...v20181122)
### Added
- More public endpoints (to many to count, implemented this changelog to late for it ...)

## [v20181005](https://github.com/ppfeufer/wp-esi-client/releases/tag/v20181005) - 2018-10-05
[Full Changelog](https://github.com/ppfeufer/wp-esi-client/compare/v1.3.0...v1.3.1)
### Changed
- Initial Version
