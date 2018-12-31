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

use WordPress\EsiClient\Swagger;

\defined('ABSPATH') or die();

class InsuranceRepository extends Swagger {
    /**
     * Used ESI enpoints in this class
     *
     * @var array ESI enpoints
     */
    protected $esiEndpoints = [
        'insurance_prices' => 'insurance/prices/?datasource=tranquility'
    ];

    /**
     * Shows insurance prices for type Ids
     *
     * @return \WordPress\EsiClient\Model\Insurance\InsurancePrices
     */
    public function insurancePrices() {
        $this->setEsiRoute($this->esiEndpoints['insurance_prices']);
        $this->setEsiVersion('v1');

        $esiData = $this->callEsi();

        if(!\is_null($esiData)) {
            $returnValue = $this->mapArray(\json_encode(['effects' => $esiData]), '\WordPress\EsiClient\Model\Insurance\InsurancePrices');
        }

        return $returnValue;
    }
}
