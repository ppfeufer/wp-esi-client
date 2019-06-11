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

class Structures {
    /**
     * allianceId
     *
     * The alliance that owns the structure.
     *
     * @var int
     */
    protected $allianceId = null;

    /**
     * solarSystemId
     *
     * Solar system in which the structure is located.
     *
     * @var int
     */
    protected $solarSystemId = null;

    /**
     * structureId
     *
     * Unique item ID for this structure.
     *
     * @var int
     */
    protected $structureId = null;

    /**
     * structureTypeId
     *
     * A reference to the type of structure this is.
     *
     * @var int
     */
    protected $structureTypeId = null;

    /**
     * vulnerabilityOccupancyLevel
     *
     * The occupancy level for the next or current vulnerability window.
     * This takes into account all development indexes and capital system
     * bonuses. Also known as Activity Defense Multiplier from in the client.
     * It increases the time that attackers must spend using their
     * entosis links on the structure.
     *
     * @var float
     */
    protected $vulnerabilityOccupancyLevel = null;

    /**
     * vulnerableEndTime
     *
     * The time at which the next or current vulnerability window ends.
     * At the end of a vulnerability window the next window is recalculated
     * and locked in along with the vulnerabilityOccupancyLevel.
     * If the structure is not in 100% entosis control of the defender,
     * it will go in to ‘overtime’ and stay vulnerable for as long as that
     * situation persists.
     * Only once the defenders have 100% entosis control and has the
     * vulnerableEndTime passed does the vulnerability interval expire and
     * a new one is calculated.
     *
     * @var DateTime
     */
    protected $vulnerableEndTime = null;

    /**
     * vulnerableStartTime
     *
     * The next time at which the structure will become vulnerable.
     * Or the start time of the current window if current time is between
     * this and vulnerableEndTime.
     *
     * @var DateTime
     */
    protected $vulnerableStartTime = null;

    /**
     * getAllianceId
     *
     * @return int
     */
    public function getAllianceId() {
        return $this->allianceId;
    }

    /**
     * setAllianceId
     *
     * @param int $allianceId
     */
    protected function setAllianceId(int $allianceId) {
        $this->allianceId = $allianceId;
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

    /**
     * getStructureTypeId
     *
     * @return int
     */
    public function getStructureTypeId() {
        return $this->structureTypeId;
    }

    /**
     * setStructureTypeId
     *
     * @param int $structureTypeId
     */
    protected function setStructureTypeId(int $structureTypeId) {
        $this->structureTypeId = $structureTypeId;
    }

    /**
     * getVulnerabilityOccupancyLevel
     *
     * @return float
     */
    public function getVulnerabilityOccupancyLevel() {
        return $this->vulnerabilityOccupancyLevel;
    }

    /**
     * setVulnerabilityOccupancyLevel
     *
     * @param float $vulnerabilityOccupancyLevel
     */
    protected function setVulnerabilityOccupancyLevel(float $vulnerabilityOccupancyLevel) {
        $this->vulnerabilityOccupancyLevel = $vulnerabilityOccupancyLevel;
    }

    /**
     * getVulnerableEndTime
     *
     * @return DateTime
     */
    public function getVulnerableEndTime() {
        return $this->vulnerableEndTime;
    }

    /**
     * setVulnerableEndTime
     *
     * @param DateTime $vulnerableEndTime
     */
    protected function setVulnerableEndTime(DateTime $vulnerableEndTime) {
        $this->vulnerableEndTime = $vulnerableEndTime;
    }

    /**
     * getVulnerableStartTime
     *
     * @return DateTime
     */
    public function getVulnerableStartTime() {
        return $this->vulnerableStartTime;
    }

    /**
     * setVulnerableStartTime
     *
     * @param DateTime $vulnerableStartTime
     */
    protected function setVulnerableStartTime(DateTime $vulnerableStartTime) {
        $this->vulnerableStartTime = $vulnerableStartTime;
    }
}
