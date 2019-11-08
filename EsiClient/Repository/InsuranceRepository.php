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
use \WordPress\EsiClient\Model\Insurance\Prices;
use \WordPress\EsiClient\Swagger;

\defined('ABSPATH') or die();

class InsuranceRepository extends Swagger {
    /**
     * Used ESI enpoints in this class
     *
     * @var array ESI enpoints
     */
    protected $esiEndpoints = [
        'insurance_prices' => 'insurance/prices/?datasource=tranquility&language={language}'
    ];

    /**
     * Shows insurance prices for type Ids
     *
     * @param string $language
     * @return Prices|EsiError
     */
    public function insurancePrices(string $language = 'en-us') {
        // just to make sure if some smarty pants tries to set an empty language
        if(\is_null($language) || empty($language)) {
            $language = 'en-us';
        }

        $this->setEsiRoute($this->esiEndpoints['insurance_prices']);
        $this->setEsiRouteParameter([
            '/{language}/' => $language
        ]);
        $this->setEsiVersion('v1');

        $esiData = $this->callEsi();

        if(!\is_null($esiData)) {
            switch($esiData['responseCode']) {
                case 200:
                    $returnValue = $this->mapArray(\json_encode(['effects' => $esiData['responseBody']]), '\WordPress\EsiClient\Model\Insurance\Prices');
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
