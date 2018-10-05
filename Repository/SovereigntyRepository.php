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

\defined('ABSPATH') or die();

class SovereigntyRepository extends \WordPress\EsiClient\Swagger {
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
     * @return array
     */
    public function sovereigntyCampaigns() {
        $this->setEsiMethod('get');
        $this->setEsiRoute($this->esiEndpoints['sovereignty_campaigns']);
        $this->setEsiVersion('v1');

        return $this->mapArray($this->callEsi(), '\\WordPress\EsiClient\Model\Sovereignty\SovereigntyCampaigns');
    }

    /**
     * Shows sovereignty information for solar systems
     *
     * @return array
     */
    public function sovereigntyMap() {
        $this->setEsiMethod('get');
        $this->setEsiRoute($this->esiEndpoints['sovereignty_map']);
        $this->setEsiVersion('v1');

        return $this->mapArray($this->callEsi(), '\\WordPress\EsiClient\Model\Sovereignty\SovereigntyMap');
    }

    /**
     * Shows sovereignty data for structures
     *
     * @return array
     */
    public function sovereigntyStructures() {
        $this->setEsiMethod('get');
        $this->setEsiRoute($this->esiEndpoints['sovereignty_structures']);
        $this->setEsiVersion('v1');

        return $this->mapArray($this->callEsi(), '\\WordPress\EsiClient\Model\Sovereignty\SovereigntyStructures');
    }
}
