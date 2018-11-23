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

class SovereigntyCampaigns {
    /**
     * attackersScore
     *
     * @var float
     */
    protected $attackersScore = null;

    /**
     * campaignId
     *
     * @var int
     */
    protected $campaignId = null;

    /**
     * constellationId
     *
     * @var int
     */
    protected $constellationId = null;

    /**
     * defenderId
     *
     * @var int
     */
    protected $defenderId = null;

    /**
     * defenderScore
     *
     * @var float
     */
    protected $defenderScore = null;

    /**
     * eventType
     *
     * @var string
     */
    protected $eventType = null;

    /**
     * participants
     *
     * @var \WordPress\EsiClient\Model\Sovereignty\SovereigntyCampaigns\Participants
     */
    protected $participants = null;

    /**
     * solarSystemId
     *
     * @var int
     */
    protected $solarSystemId = null;

    /**
     * startTime
     *
     * @var \DateTime
     */
    protected $startTime = null;

    /**
     * structureId
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
     * @return \WordPress\EsiClient\Model\Sovereignty\SovereigntyCampaigns\Participants
     */
    public function getParticipants() {
        return $this->participants;
    }

    /**
     * setParticipants
     *
     * @param \WordPress\EsiClient\Model\Sovereignty\SovereigntyCampaigns\Participants $participants
     */
    protected function setParticipants(SovereigntyCampaigns\Participants $participants) {
        $mapper = new \WordPress\EsiClient\Mapper\JsonMapper;

        $this->agents = $mapper->mapArray($participants, [], '\\WordPress\EsiClient\Model\Sovereignty\SovereigntyCampaigns\Participants');
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
     * @return \DateTime
     */
    public function getStartTime() {
        return $this->startTime;
    }

    /**
     * setStartTime
     *
     * @param \DateTime $startTime
     */
    protected function setStartTime(\DateTime $startTime) {
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
