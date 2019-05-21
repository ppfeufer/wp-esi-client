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

namespace WordPress\EsiClient\Model\Characters\CharacterId;

/**
 * Requires the following scope: esi-characterstats.read.v1
 * Returns aggregate yearly stats for a character
 *
 * @author ppfeufer
 */
class Stats {
    /**
     * charcater
     *
     * @var Stats\Character
     */
    protected $character = null;

    /**
     * combat
     *
     * @var Stats\Combat
     */
    protected $combat = null;

    /**
     * industry
     *
     * @var Stats\Industry
     */
    protected $industry = null;

    /**
     * inventory
     *
     * @var Stats\Inventory
     */
    protected $inventory = null;

    /**
     * isk
     *
     * @var Stats\Isk
     */
    protected $isk = null;

    /**
     * market
     *
     * @var Stats\Market
     */
    protected $market = null;

    /**
     * mining
     *
     * @var Stats\Mining
     */
    protected $mining = null;

    /**
     * module
     *
     * @var Stats\Module
     */
    protected $module = null;

    /**
     * orbital
     *
     * @var Stats\Orbital
     */
    protected $orbital = null;

    /**
     * pve
     *
     * @var Stats\Pve
     */
    protected $pve = null;

    /**
     * social
     *
     * @var Stats\Social
     */
    protected $social = null;

    /**
     * travel
     *
     * @var Stats\Travel
     */
    protected $travel = null;

    /**
     * year
     *
     * Gregorian year for this set of aggregates
     *
     * @var int
     */
    protected $year = null;

    /**
     * getCharacter
     *
     * @return \WordPress\EsiClient\Model\Characters\CharacterId\Stats\Character
     */
    public function getCharacter(): Stats\Character {
        return $this->character;
    }

    /**
     * getCombat
     *
     * @return \WordPress\EsiClient\Model\Characters\CharacterId\Stats\Combat
     */
    public function getCombat(): Stats\Combat {
        return $this->combat;
    }

    /**
     * getIndustry
     *
     * @return \WordPress\EsiClient\Model\Characters\CharacterId\Stats\Industry
     */
    public function getIndustry(): Stats\Industry {
        return $this->industry;
    }

    /**
     * getInventory
     *
     * @return \WordPress\EsiClient\Model\Characters\CharacterId\Stats\Inventory
     */
    public function getInventory(): Stats\Inventory {
        return $this->inventory;
    }

    /**
     * getIsk
     *
     * @return \WordPress\EsiClient\Model\Characters\CharacterId\Stats\Isk
     */
    public function getIsk(): Stats\Isk {
        return $this->isk;
    }

    /**
     * getMarket
     *
     * @return \WordPress\EsiClient\Model\Characters\CharacterId\Stats\Market
     */
    public function getMarket(): Stats\Market {
        return $this->market;
    }

    /**
     * getMining
     *
     * @return \WordPress\EsiClient\Model\Characters\CharacterId\Stats\Mining
     */
    public function getMining(): Stats\Mining {
        return $this->mining;
    }

    /**
     * getModule
     *
     * @return \WordPress\EsiClient\Model\Characters\CharacterId\Stats\Module
     */
    public function getModule(): Stats\Module {
        return $this->module;
    }

    public function getOrbital(): Stats\Orbital {
        return $this->orbital;
    }

    /**
     * getOrbital
     *
     * @return \WordPress\EsiClient\Model\Characters\CharacterId\Stats\Pve
     */
    public function getPve(): Stats\Pve {
        return $this->pve;
    }

    /**
     * getSocial
     *
     * @return \WordPress\EsiClient\Model\Characters\CharacterId\Stats\Social
     */
    public function getSocial(): Stats\Social {
        return $this->social;
    }

    /**
     * getTravel
     *
     * @return \WordPress\EsiClient\Model\Characters\CharacterId\Stats\Travel
     */
    public function getTravel(): Stats\Travel {
        return $this->travel;
    }

    /**
     * getYear
     *
     * @return int
     */
    public function getYear() {
        return $this->year;
    }

    /**
     * setCharacter
     *
     * @param \WordPress\EsiClient\Model\Characters\CharacterId\Stats\Character $character
     */
    protected function setCharacter(Stats\Character $character) {
        $this->character = $character;
    }

    /**
     * setCombat
     *
     * @param \WordPress\EsiClient\Model\Characters\CharacterId\Stats\Combat $combat
     */
    protected function setCombat(Stats\Combat $combat) {
        $this->combat = $combat;
    }

    /**
     * setIndustry
     *
     * @param \WordPress\EsiClient\Model\Characters\CharacterId\Stats\Industry $industry
     */
    protected function setIndustry(Stats\Industry $industry) {
        $this->industry = $industry;
    }

    /**
     * setInventory
     *
     * @param \WordPress\EsiClient\Model\Characters\CharacterId\Stats\Inventory $inventory
     */
    protected function setInventory(Stats\Inventory $inventory) {
        $this->inventory = $inventory;
    }

    protected function setIsk(Stats\Isk $isk) {
        $this->isk = $isk;
    }

    /**
     * setIsk
     *
     * @param \WordPress\EsiClient\Model\Characters\CharacterId\Stats\Market $market
     */
    protected function setMarket(Stats\Market $market) {
        $this->market = $market;
    }

    /**
     * setMining
     *
     * @param \WordPress\EsiClient\Model\Characters\CharacterId\Stats\Mining $mining
     */
    protected function setMining(Stats\Mining $mining) {
        $this->mining = $mining;
    }

    /**
     * setModule
     *
     * @param \WordPress\EsiClient\Model\Characters\CharacterId\Stats\Module $module
     */
    protected function setModule(Stats\Module $module) {
        $this->module = $module;
    }

    protected function setOrbital(Stats\Orbital $orbital) {
        $this->orbital = $orbital;
    }

    /**
     * setOrbital
     *
     * @param \WordPress\EsiClient\Model\Characters\CharacterId\Stats\Pve $pve
     */
    protected function setPve(Stats\Pve $pve) {
        $this->pve = $pve;
    }

    /**
     * setSocial
     *
     * @param \WordPress\EsiClient\Model\Characters\CharacterId\Stats\Social $social
     */
    protected function setSocial(Stats\Social $social) {
        $this->social = $social;
    }

    /**
     * setTravel
     *
     * @param \WordPress\EsiClient\Model\Characters\CharacterId\Stats\Travel $travel
     */
    protected function setTravel(Stats\Travel $travel) {
        $this->travel = $travel;
    }

    /**
     * setYear
     *
     * @param int $year
     */
    protected function setYear($year) {
        $this->year = $year;
    }
}
