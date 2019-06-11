<?php

/*
 * Copyright (C) 2019 ppfeufer
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

namespace WordPress\EsiClient\Model\Characters\CharacterId\Stats;

class Orbital {
    /**
     * strikeCharactersKilled
     *
     * @var int
     */
    protected $strikeCharactersKilled = 0;

    /**
     * strikeDamageToPlayersArmorAmount
     *
     * @var int
     */
    protected $strikeDamageToPlayersArmorAmount = 0;

    /**
     * strikeDamageToPlayersShieldAmount
     *
     * @var int
     */
    protected $strikeDamageToPlayersShieldAmount = 0;

    /**
     * getStrikeCharactersKilled
     *
     * @return int
     */
    public function getStrikeCharactersKilled() {
        return $this->strikeCharactersKilled;
    }

    /**
     * getStrikeDamageToPlayersArmorAmount
     *
     * @return int
     */
    public function getStrikeDamageToPlayersArmorAmount() {
        return $this->strikeDamageToPlayersArmorAmount;
    }

    /**
     * getStrikeDamageToPlayersShieldAmount
     *
     * @return int
     */
    public function getStrikeDamageToPlayersShieldAmount() {
        return $this->strikeDamageToPlayersShieldAmount;
    }

    /**
     * setStrikeCharactersKilled
     *
     * @param int $strikeCharactersKilled
     */
    protected function setStrikeCharactersKilled(int $strikeCharactersKilled) {
        $this->strikeCharactersKilled = $strikeCharactersKilled;
    }

    /**
     * setStrikeDamageToPlayersArmorAmount
     *
     * @param int $strikeDamageToPlayersArmorAmount
     */
    protected function setStrikeDamageToPlayersArmorAmount(int $strikeDamageToPlayersArmorAmount) {
        $this->strikeDamageToPlayersArmorAmount = $strikeDamageToPlayersArmorAmount;
    }

    /**
     * setStrikeDamageToPlayersShieldAmount
     *
     * @param int $strikeDamageToPlayersShieldAmount
     */
    protected function setStrikeDamageToPlayersShieldAmount(int $strikeDamageToPlayersShieldAmount) {
        $this->strikeDamageToPlayersShieldAmount = $strikeDamageToPlayersShieldAmount;
    }
}
