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

namespace WordPress\EsiClient\Model\Insurance\Prices;

class Levels {
    /**
     * cost
     *
     * @var float
     */
    protected $cost = null;

    /**
     * name
     *
     * Localized insurance level
     *
     * @var string
     */
    protected $name = null;

    /**
     * payout
     *
     * @var float
     */
    protected $payout = null;

    /**
     * getCost
     *
     * @return float
     */
    public function getCost() {
        return $this->cost;
    }

    /**
     * setCost
     *
     * @param float $cost
     */
    protected function setCost(float $cost) {
        $this->cost = $cost;
    }

    /**
     * getName
     *
     * @return string
     */
    public function getName() {
        return $this->name;
    }

    /**
     * setName
     *
     * @param string $name
     */
    protected function setName(string $name) {
        $this->name = $name;
    }

    /**
     * getPayout
     *
     * @return float
     */
    public function getPayout() {
        return $this->payout;
    }

    /**
     * setPayout
     *
     * @param float $payout
     */
    protected function setPayout(float $payout) {
        $this->payout = $payout;
    }
}
