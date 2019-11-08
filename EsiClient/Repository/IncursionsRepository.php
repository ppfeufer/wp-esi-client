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

use \WordPress\EsiClient\Model\Incursions;
use \WordPress\EsiClient\Model\Error\EsiError;
use \WordPress\EsiClient\Swagger;

\defined('ABSPATH') or die();

class IncursionsRepository extends Swagger {
    /**
     * Used ESI enpoints in this class
     *
     * @var array ESI enpoints
     */
    protected $esiEndpoints = [
        'incursions' => 'incursions/?datasource=tranquility'
    ];

    /**
     * Shows incursion data
     *
     * @return Incursions|EsiError
     */
    public function incursions() {
        $returnValue = null;

        $this->setEsiMethod('get');
        $this->setEsiRoute($this->esiEndpoints['incursions']);
        $this->setEsiVersion('v1');

        $esiData = $this->callEsi();

        if(!\is_null($esiData)) {
            switch($esiData['responseCode']) {
                case 200:
                    $returnValue = $this->map($esiData['responseBody'], new Incursions);
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
