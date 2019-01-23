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

namespace WordPress\EsiClient\Repository;

use \WordPress\EsiClient\ {
    Model\Universe\UniverseAsteroidBeltsAsteroidBeltId,
    Model\Universe\UniverseCategoriesCategoryId,
    Model\Universe\UniverseConstellationsConstellationId,
    Model\Universe\UniverseGroupsGroupId,
    Model\Universe\UniverseIds,
    Model\Universe\UniverseNames,
    Model\Universe\UniverseRegionsRegionId,
    Model\Universe\UniverseSystemsSystemId,
    Model\Universe\UniverseTypesTypeId,
    Swagger
};

\defined('ABSPATH') or die();

class UniverseRepository extends Swagger {
    /**
     * Used ESI enpoints in this class
     *
     * @var array ESI enpoints
     */
    protected $esiEndpoints = [
        'universe_ancestries' => 'universe/ancestries/?datasource=tranquility&language={language}',
        'universe_asteroidBelts_asteroidBeltId' => 'universe/asteroid_belts/{asteroid_belt_id}/?datasource=tranquility',
        'universe_bloodlines' => 'universe/bloodlines/?datasource=tranquility&language={language}',
        'universe_categories' => 'universe/categories/?datasource=tranquility',
        'universe_categories_categoryId' => 'universe/categories/{category_id}/?datasource=tranquility&language={language}',
        'universe_constellations' => 'universe/constellations/?datasource=tranquility',
        'universe_constellations_constellationId' => 'universe/constellations/{constellation_id}/?datasource=tranquility&language={language}',
        'universe_factions' => 'universe/factions/?datasource=tranquility&language={language}',
        'universe_graphics' => 'universe/graphics/?datasource=tranquility',
        'universe_graphics_graphicId' => 'universe/graphics/{graphic_id}/?datasource=tranquility',
        'universe_groups' => 'universe/groups/?datasource=tranquility',
        'universe_groups_groupId' => 'universe/groups/{group_id}/?datasource=tranquility&language={language}',
        'universe_ids' => 'universe/ids/?datasource=tranquility&language={language}',
        'universe_moons_moonId' => 'universe/moons/{moon_id}/?datasource=tranquility',
        'universe_names' => 'universe/names/?datasource=tranquility',
        'universe_planets_planetId' => 'universe/planets/{planet_id}/?datasource=tranquility',
        'universe_races' => 'universe/races/?datasource=tranquility&language={language}',
        'universe_regions' => 'universe/regions/?datasource=tranquility',
        'universe_regions_regionId' => 'universe/regions/{region_id}/?datasource=tranquility&language={language}',
        'universe_stargates_stargateId' => 'universe/stargates/{stargate_id}/?datasource=tranquility',
        'universe_stars_starId' => 'universe/stars/{star_id}/?datasource=tranquility',
        'universe_stations_stationId' => 'universe/stations/{station_id}/?datasource=tranquility',
        'universe_structures' => 'universe/structures/?datasource=tranquility',
        'universe_systemJumps' => 'universe/system_jumps/?datasource=tranquility',
        'universe_systemKills' => 'universe/system_kills/?datasource=tranquility',
        'universe_systems' => 'universe/systems/?datasource=tranquility',
        'universe_systems_systemId' => 'universe/systems/{system_id}/?datasource=tranquility&language={language}',
        'universe_types' => 'universe/types/?datasource=tranquility',
        'universe_types_typeId' => 'universe/types/{type_id}/?datasource=tranquility&language={language}',
    ];

    /**
     * Get all character ancestries
     *
     * @param string $language
     * @return array of \WordPress\EsiClient\Model\Universe\UniverseAncestries
     */
    public function universeAncestries(string $language = 'en-us') {
        // just to make sure if some smarty pants tries to set an empty language
        if(\is_null($language) || empty($language)) {
            $language = 'en-us';
        }

        $returnValue = null;

        $this->setEsiMethod('get');
        $this->setEsiRoute($this->esiEndpoints['universe_ancestries']);
        $this->setEsiRouteParameter([
            '/{language}/' => $language
        ]);
        $this->setEsiVersion('v1');

        $esiData = $this->callEsi();

        if(!\is_null($esiData)) {
            $returnValue = $this->mapArray($esiData, '\\WordPress\EsiClient\Model\Universe\UniverseAncestries');
        }

        return $returnValue;
    }

    /**
     * Get information on an asteroid belt
     *
     * @param int $asteroidBeltId
     * @return UniverseAsteroidBeltsAsteroidBeltId
     */
    public function universeAsteroidBeltsAsteroidBeltId(int $asteroidBeltId) {
        $returnValue = null;

        $this->setEsiMethod('get');
        $this->setEsiRoute($this->esiEndpoints['universe_asteroidBelts_asteroidBeltId']);
        $this->setEsiRouteParameter([
            '/{asteroid_belt_id}/' => $asteroidBeltId
        ]);
        $this->setEsiVersion('v1');

        $esiData = $this->callEsi();

        if(!\is_null($esiData)) {
            $returnValue = $this->map($esiData, new UniverseAsteroidBeltsAsteroidBeltId);
        }

        return $returnValue;
    }

    /**
     * Get information on a constellation
     *
     * @param int $constellationId An EVE constellation ID
     * @param string $language
     * @return UniverseConstellationsConstellationId
     */
    public function universeConstellationsConstellationId(int $constellationId, string $language = 'en-us') {
        // just to make sure if some smarty pants tries to set an empty language
        if(\is_null($language) || empty($language)) {
            $language = 'en-us';
        }

        $returnValue = null;

        $this->setEsiMethod('get');
        $this->setEsiRoute($this->esiEndpoints['universe_constellations_constellationId']);
        $this->setEsiRouteParameter([
            '/{constellation_id}/' => $constellationId,
            '/{language}/' => $language
        ]);
        $this->setEsiVersion('v1');

        $esiData = $this->callEsi();

        if(!\is_null($esiData)) {
            $returnValue = $this->map($esiData, new UniverseConstellationsConstellationId);
        }

        return $returnValue;
    }

    /**
     * Get information on an item group
     *
     * @param int $groupId An Eve item group ID
     * @param string $language
     * @return UniverseGroupsGroupId
     */
    public function universeGroupsGroupId(int $groupId, string $language = 'en-us') {
        // just to make sure if some smarty pants tries to set an empty language
        if(\is_null($language) || empty($language)) {
            $language = 'en-us';
        }

        $returnValue = null;

        $this->setEsiMethod('get');
        $this->setEsiRoute($this->esiEndpoints['universe_groups_groupId']);
        $this->setEsiRouteParameter([
            '/{group_id}/' => $groupId,
            '/{language}/' => $language
        ]);
        $this->setEsiVersion('v1');

        $esiData = $this->callEsi();

        if(!\is_null($esiData)) {
            $returnValue = $this->map($esiData, new UniverseGroupsGroupId);
        }

        return $returnValue;
    }

    /**
     * Get information on an item group
     *
     * @param int $categoryId An Eve item group ID
     * @param string $language
     * @return UniverseGroupsGroupId
     */
    public function universeCategoriesCategoryId(int $categoryId, string $language = 'en-us') {
        // just to make sure if some smarty pants tries to set an empty language
        if(\is_null($language) || empty($language)) {
            $language = 'en-us';
        }

        $returnValue = null;

        $this->setEsiMethod('get');
        $this->setEsiRoute($this->esiEndpoints['universe_categories_categoryId']);
        $this->setEsiRouteParameter([
            '/{category_id}/' => $categoryId,
            '/{language}/' => $language
        ]);
        $this->setEsiVersion('v1');

        $esiData = $this->callEsi();

        if(!\is_null($esiData)) {
            $returnValue = $this->map($esiData, new UniverseCategoriesCategoryId);
        }

        return $returnValue;
    }

    /**
     * Resolve a set of names to IDs in the following categories:
     * agents, alliances, characters, constellations, corporations factions,
     * inventory_types, regions, stations, and systems.
     *
     * Only exact matches will be returned.
     * All names searched for are cached for 12 hours
     *
     * @param array $names The names to resolve
     * @param string $language
     * @return UniverseIds
     */
    public function universeIds(array $names, string $language = 'en-us') {
        // just to make sure if some smarty pants tries to set an empty language
        if(\is_null($language) || empty($language)) {
            $language = 'en-us';
        }

        $returnValue = null;

        $this->setEsiMethod('post');
        $this->setEsiPostParameter($names);
        $this->setEsiRoute($this->esiEndpoints['universe_ids']);
        $this->setEsiRouteParameter([
            '/{language}/' => $language
        ]);
        $this->setEsiVersion('v1');

        $esiData = $this->callEsi();

        if(!\is_null($esiData)) {
            $returnValue = $this->map($esiData, new UniverseIds);
        }

        return $returnValue;
    }

    /**
     * Resolve a set of IDs to names and categories.
     * Supported ID’s for resolving are:
     *      Characters,
     *      Corporations,
     *      Alliances,
     *      Stations,
     *      Solar Systems,
     *      Constellations,
     *      Regions,
     *      Types
     *
     * @param array $ids
     * @return UniverseNames
     */
    public function universeNames(array $ids) {
        $returnValue = null;

        $this->setEsiMethod('post');
        $this->setEsiPostParameter($ids);
        $this->setEsiRoute($this->esiEndpoints['universe_names']);
        $this->setEsiVersion('v2');

        $esiData = $this->callEsi();

        if(!\is_null($esiData)) {
            $returnValue = $this->map($esiData, new UniverseNames);
        }

        return $returnValue;
    }

    /**
     * Get information on a region
     *
     * @param int $regionId An EVE region ID
     * @param string $language
     * @return UniverseRegionsRegionId
     */
    public function universeRegionsRegionId(int $regionId, string $language = 'en-us') {
        // just to make sure if some smarty pants tries to set an empty language
        if(\is_null($language) || empty($language)) {
            $language = 'en-us';
        }

        $returnValue = null;

        $this->setEsiMethod('get');
        $this->setEsiRoute($this->esiEndpoints['universe_regions_regionId']);
        $this->setEsiRouteParameter([
            '/{region_id}/' => $regionId,
            '/{language}/' => $language
        ]);
        $this->setEsiVersion('v1');

        $esiData = $this->callEsi();

        if(!\is_null($esiData)) {
            $returnValue = $this->map($esiData, new UniverseRegionsRegionId);
        }

        return $returnValue;
    }

    /**
     * Get the number of jumps in solar systems within the last hour
     * ending at the timestamp of the Last-Modified header, excluding
     * wormhole space. Only systems with jumps will be listed
     *
     * @return array of \WordPress\EsiClient\Model\Universe\UniverseSystemJumps
     */
    public function universeSystemJumps() {
        $returnValue = null;

        $this->setEsiMethod('get');
        $this->setEsiRoute($this->esiEndpoints['universe_systemJumps']);
        $this->setEsiVersion('v1');

        $esiData = $this->callEsi();

        if(!\is_null($esiData)) {
            $returnValue = $this->mapArray($esiData, '\\WordPress\EsiClient\Model\Universe\UniverseSystemJumps');
        }

        return $returnValue;
    }

    /**
     * Get the number of ship, pod and NPC kills per solar system within
     * the last hour ending at the timestamp of the Last-Modified header,
     * excluding wormhole space. Only systems with kills will be listed
     *
     * @return array of \WordPress\EsiClient\Model\Universe\UniverseSystemKills
     */
    public function universeSystemKills() {
        $returnValue = null;

        $this->setEsiMethod('get');
        $this->setEsiRoute($this->esiEndpoints['universe_systemKills']);
        $this->setEsiVersion('v2');

        $esiData = $this->callEsi();

        if(!\is_null($esiData)) {
            $returnValue = $this->mapArray($esiData, '\\WordPress\EsiClient\Model\Universe\UniverseSystemKills');
        }

        return $returnValue;
    }

    /**
     * Get information on a solar system
     *
     * @param int $systemId An EVE solar system ID
     * @param string $language
     * @return UniverseSystemsSystemId
     */
    public function universeSystemsSystemId(int $systemId, string $language = 'en-us') {
        // just to make sure if some smarty pants tries to set an empty language
        if(\is_null($language) || empty($language)) {
            $language = 'en-us';
        }

        $returnValue = null;

        $this->setEsiMethod('get');
        $this->setEsiRoute($this->esiEndpoints['universe_systems_systemId']);
        $this->setEsiRouteParameter([
            '/{system_id}/' => $systemId,
            '/{language}/' => $language
        ]);
        $this->setEsiVersion('v4');

        $esiData = $this->callEsi();

        if(!\is_null($esiData)) {
            $returnValue = $this->map($esiData, new UniverseSystemsSystemId);
        }

        return $returnValue;
    }

    /**
     * Get information on a type
     *
     * @param int $typeId An Eve item type ID
     * @param string $language
     * @return UniverseTypesTypeId
     */
    public function universeTypesTypeId(int $typeId, string $language = 'en-us') {
        // just to make sure if some smarty pants tries to set an empty language
        if(\is_null($language) || empty($language)) {
            $language = 'en-us';
        }

        $returnValue = null;

        $this->setEsiMethod('get');
        $this->setEsiRoute($this->esiEndpoints['universe_types_typeId']);
        $this->setEsiRouteParameter([
            '/{type_id}/' => $typeId,
            '/{language}/' => $language
        ]);
        $this->setEsiVersion('v3');

        $esiData = $this->callEsi();

        if(!\is_null($esiData)) {
            $returnValue = $this->map($esiData, new UniverseTypesTypeId);
        }

        return $returnValue;
    }
}
