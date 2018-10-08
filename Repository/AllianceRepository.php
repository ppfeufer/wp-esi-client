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

\defined('ABSPATH') or die();

class AllianceRepository extends \WordPress\EsiClient\Swagger {
    /**
     * Used ESI enpoints in this class
     *
     * @var array ESI enpoints
     */
    protected $esiEndpoints = [
        'alliances' => 'alliances/?datasource=tranquility',
        'alliances_allianceId' => 'alliances/{alliance_id}/?datasource=tranquility',
        'alliances_allianceId_corporations' => 'alliances/{alliance_id}/corporations/?datasource=tranquility',
        'alliances_allianceId_icons' => 'alliances/{alliance_id}/icons/?datasource=tranquility'
    ];

    /**
     * List all active player alliances
     *
     * @return array
     */
    public function alliances() {
        $this->setEsiMethod('get');
        $this->setEsiRoute($this->esiEndpoints['alliances']);
        $this->setEsiVersion('v1');

        return \json_decode($this->callEsi());
    }

    /**
     * Public information about an alliance
     *
     * @param int $allianceID An EVE alliance ID
     * @return \WordPress\EsiClient\Model\Alliance\AlliancesAllianceId
     */
    public function alliancesAllianceId(int $allianceID) {
        $this->setEsiMethod('get');
        $this->setEsiRoute($this->esiEndpoints['alliances_allianceId']);
        $this->setEsiRouteParameter([
            '/{alliance_id}/' => $allianceID
        ]);
        $this->setEsiVersion('v3');

        return $this->map($this->callEsi(), new \WordPress\EsiClient\Model\Alliance\AlliancesAllianceId);
    }

    /**
     * List all current member corporations of an alliance
     *
     * @return \WordPress\EsiClient\Model\Alliance\AlliancesAllianceIdCorporations
     */
    public function alliancesAllianceIdCorporations() {
        $this->setEsiMethod('get');
        $this->setEsiRoute($this->esiEndpoints['alliances_allianceId_corporations']);
        $this->setEsiVersion('v1');

        return $this->mapArray(\json_encode(['corporations' => $this->callEsi()]), '\WordPress\EsiClient\Model\Alliance\AlliancesAllianceIdCorporations');
    }

    /**
     * Public information about an alliance
     *
     * @param int $allianceID An EVE alliance ID
     * @return \WordPress\EsiClient\Model\Alliance\AlliancesAllianceIdIcons
     */
    public function alliancesAllianceIdIcons(int $allianceID) {
        $this->setEsiMethod('get');
        $this->setEsiRoute($this->esiEndpoints['alliances_allianceId_icons']);
        $this->setEsiRouteParameter([
            '/{alliance_id}/' => $allianceID
        ]);
        $this->setEsiVersion('v1');

        return $this->map($this->callEsi(), new \WordPress\EsiClient\Model\Alliance\AlliancesAllianceIdIcons);
    }
}
