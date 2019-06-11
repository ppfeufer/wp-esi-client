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

namespace WordPress\EsiClient\Model\Sovereignty;

use \DateTime;
use \WordPress\EsiClient\Mapper\JsonMapper;
use \WordPress\EsiClient\Model\Sovereignty\SovereigntyCampaigns\Participants;

class Campaigns {
    /**
     * attackersScore
     *
     * Score for all attacking parties, only present in Defense Events.
     *
     * @var float
     */
    protected $attackersScore = null;

    /**
     * campaignId
     *
     * Unique ID for this campaign.
     *
     * @var int
     */
    protected $campaignId = null;

    /**
     * constellationId
     *
     * The constellation in which the campaign will take place.
     *
     * @var int
     */
    protected $constellationId = null;

    /**
     * defenderId
     *
     * Defending alliance, only present in Defense Events
     *
     * @var int
     */
    protected $defenderId = null;

    /**
     * defenderScore
     *
     * Score for the defending alliance, only present in Defense Events.
     *
     * @var float
     */
    protected $defenderScore = null;

    /**
     * eventType
     *
     * Type of event this campaign is for. tcu_defense, ihub_defense and station_defense are referred to as "Defense Events", station_freeport as "Freeport Events".
     *
     * @var string
     */
    protected $eventType = null;

    /**
     * participants
     *
     * Alliance participating and their respective scores, only present in Freeport Events.
     *
     * @var Participants
     */
    protected $participants = null;

    /**
     * solarSystemId
     *
     * The solar system the structure is located in.
     *
     * @var int
     */
    protected $solarSystemId = null;

    /**
     * startTime
     *
     * Time the event is scheduled to start.
     *
     * @var DateTime
     */
    protected $startTime = null;

    /**
     * structureId
     *
     * The structure item ID that is related to this campaign.
     *
     * @var int
     */
    protected $structureId = null;

    /**
     * getAttackersScore
     *
     * @return float
     */
    public function getAttackersScore() {
        return $this->attackersScore;
    }

    /**
     * setAttackersScore
     *
     * @param float $attackersScore
     */
    protected function setAttackersScore(float $attackersScore) {
        $this->attackersScore = $attackersScore;
    }

    /**
     * getCampaignId
     *
     * @return int
     */
    public function getCampaignId() {
        return $this->campaignId;
    }

    /**
     * setCampaignId
     *
     * @param int $campaignId
     */
    protected function setCampaignId(int $campaignId) {
        $this->campaignId = $campaignId;
    }

    /**
     * getConstellationId
     *
     * @return int
     */
    public function getConstellationId() {
        return $this->constellationId;
    }

    /**
     * setConstellationId
     *
     * @param int $constellationId
     */
    protected function setConstellationId(int $constellationId) {
        $this->constellationId = $constellationId;
    }

    /**
     * getDefenderId
     *
     * @return int
     */
    public function getDefenderId() {
        return $this->defenderId;
    }

    /**
     * setDefenderId
     *
     * @param int $defenderId
     */
    protected function setDefenderId(int $defenderId) {
        $this->defenderId = $defenderId;
    }

    /**
     * getDefenderScore
     *
     * @return float
     */
    public function getDefenderScore() {
        return $this->defenderScore;
    }

    /**
     * setDefenderScore
     *
     * @param float $defenderScore
     */
    protected function setDefenderScore(float $defenderScore) {
        $this->defenderScore = $defenderScore;
    }

    /**
     * getParticipants
     *
     * @return Participants
     */
    public function getParticipants() {
        return $this->participants;
    }

    /**
     * setParticipants
     *
     * @param Participants $participants
     */
    protected function setParticipants(Participants $participants) {
        $mapper = new JsonMapper;

        $this->participants = $mapper->mapArray($participants, [], '\\WordPress\EsiClient\Model\Sovereignty\Campaigns\Participants');
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
     * getStartTime
     *
     * @return DateTime
     */
    public function getStartTime() {
        return $this->startTime;
    }

    /**
     * setStartTime
     *
     * @param DateTime $startTime
     */
    protected function setStartTime(DateTime $startTime) {
        $this->startTime = $startTime;
    }

    /**
     * getStructureId
     *
     * @return int
     */
    public function getStructureId() {
        return $this->structureId;
    }

    /**
     * setStructureId
     *
     * @param int $structureId
     */
    protected function setStructureId(int $structureId) {
        $this->structureId = $structureId;
    }
}
