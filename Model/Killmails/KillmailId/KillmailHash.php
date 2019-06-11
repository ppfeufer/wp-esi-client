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

namespace WordPress\EsiClient\Model\Killmails\KillmailId;

use \DateTime;
use \WordPress\EsiClient\Mapper\JsonMapper;
use \WordPress\EsiClient\Model\Killmails\KillmailId\KillmailHash\Victim;

class KillmailHash {
    /**
     * attackers
     *
     * @var array
     */
    protected $attackers = null;

    /**
     * killmailId
     *
     * ID of the killmail
     *
     * @var int
     */
    protected $killmailId = null;

    /**
     * killmailTime
     *
     * Time that the victim was killed and the killmail generated
     *
     * @var DateTime
     */
    protected $killmailTime = null;

    /**
     * moonId
     *
     * Moon if the kill took place at one
     *
     * @var int
     */
    protected $moonId = null;

    /**
     * solarSystemId
     *
     * Solar system that the kill took place in
     *
     * @var int
     */
    protected $solarSystemId = null;

    /**
     * victim
     *
     * @var Victim
     */
    protected $victim = null;

    /**
     * warId
     *
     * War if the killmail is generated in relation to an official war
     *
     * @var int
     */
    protected $warId = null;

    /**
     * getAttackers
     *
     * @return array
     */
    public function getAttackers() {
        return $this->attackers;
    }

    /**
     * setAttackers
     *
     * @param array $attackers
     */
    protected function setAttackers(array $attackers) {
        $mapper = new JsonMapper;

        $this->attackers = $mapper->mapArray($attackers, [], '\\WordPress\EsiClient\Model\Killmails\KillmailId\KillmailHash\Attackers');
    }

    /**
     * getKillmailId
     *
     * @return int
     */
    public function getKillmailId() {
        return $this->killmailId;
    }

    /**
     * setKillmailId
     *
     * @param int $killmailId
     */
    protected function setKillmailId(int $killmailId) {
        $this->killmailId = $killmailId;
    }

    /**
     * getKillmailTime
     *
     * @return DateTime
     */
    public function getKillmailTime() {
        return $this->killmailTime;
    }

    /**
     * setKillmailTime
     *
     * @param DateTime $killmailTime
     */
    protected function setKillmailTime(DateTime $killmailTime) {
        $this->killmailTime = $killmailTime;
    }

    /**
     * getMoonId
     *
     * @return int
     */
    public function getMoonId() {
        return $this->moonId;
    }

    /**
     * setMoonId
     *
     * @param int $moonId
     */
    protected function setMoonId(int $moonId) {
        $this->moonId = $moonId;
    }

    /**
     * getSolarSystemId
     *
     * @return int
     */
    public function getSolarSystemId() {
        return $this->solarSystemId;
    }

    /**
     * setSolarSystemId
     *
     * @param int $solarSystemId
     */
    protected function setSolarSystemId(int $solarSystemId) {
        $this->solarSystemId = $solarSystemId;
    }

    /**
     * getVictim
     *
     * @return Victim
     */
    public function getVictim() {
        return $this->victim;
    }

    /**
     * setVictim
     *
     * @param Victim $victim
     */
    protected function setVictim(Victim $victim) {
        $this->victim = $victim;
    }

    /**
     * getWarId
     *
     * @return int
     */
    public function getWarId() {
        return $this->warId;
    }

    /**
     * setWarId
     *
     * @param int $warId
     */
    protected function setWarId(int $warId) {
        $this->warId = $warId;
    }
}
