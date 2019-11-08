<?php

/*
 * Copyright (C) 2018 ppfeufer
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

use \WordPress\EsiClient\Model\Error\EsiError;
use \WordPress\EsiClient\Model\Sovereignty\Map;
use \WordPress\EsiClient\Swagger;

\defined('ABSPATH') or die();

class SovereigntyRepository extends Swagger {
    /**
     * Used ESI enpoints in this class
     *
     * @var array ESI enpoints
     */
    protected $esiEndpoints = [
        'sovereignty_campaigns' => 'sovereignty/campaigns/?datasource=tranquility',
        'sovereignty_map' => 'sovereignty/map/?datasource=tranquility',
        'sovereignty_structures' => 'sovereignty/structures/?datasource=tranquility'
    ];

    /**
     * Shows sovereignty data for campaigns
     *
     * @return array of \WordPress\EsiClient\Model\Sovereignty\Campaigns|EsiError
     */
    public function sovereigntyCampaigns() {
        $returnValue = null;

        $this->setEsiMethod('get');
        $this->setEsiRoute($this->esiEndpoints['sovereignty_campaigns']);
        $this->setEsiVersion('v1');

        $esiData = $this->callEsi();

        if(!\is_null($esiData)) {
            switch($esiData['responseCode']) {
                case 200:
                    $returnValue = $this->mapArray($esiData['responseBody'], '\\WordPress\EsiClient\Model\Sovereignty\Campaigns');
                    break;

                // Error ...
                default:
                    $returnValue = $this->createErrorObject($esiData);
                    break;
            }
        }

        return $returnValue;
    }

    /**
     * Shows sovereignty information for solar systems
     *
     * @return array of \WordPress\EsiClient\Model\Sovereignty\Map|EsiError
     */
    public function sovereigntyMap() {
        $returnValue = null;

        $this->setEsiMethod('get');
        $this->setEsiRoute($this->esiEndpoints['sovereignty_map']);
        $this->setEsiVersion('v1');

        $esiData = $this->callEsi();

        if(!\is_null($esiData)) {
            switch($esiData['responseCode']) {
                case 200:
                    $returnValue = $this->map(\json_encode(['solar_systems' => \json_decode($esiData['responseBody'])]), new Map);
                    break;

                // Error ...
                default:
                    $returnValue = $this->createErrorObject($esiData);
                    break;
            }
        }

        return $returnValue;
    }

    /**
     * Shows sovereignty data for structures
     *
     * @return array of \WordPress\EsiClient\Model\Sovereignty\Structures|EsiError
     */
    public function sovereigntyStructures() {
        $returnValue = null;

        $this->setEsiMethod('get');
        $this->setEsiRoute($this->esiEndpoints['sovereignty_structures']);
        $this->setEsiVersion('v1');

        $esiData = $this->callEsi();

        if(!\is_null($esiData)) {
            switch($esiData['responseCode']) {
                case 200:
                    $returnValue = $this->mapArray($esiData['responseBody'], '\\WordPress\EsiClient\Model\Sovereignty\Structures');
                    break;

                // Error ...
                default:
                    $returnValue = $this->createErrorObject($esiData);
                    break;
            }
        }

        return $returnValue;
    }
}
