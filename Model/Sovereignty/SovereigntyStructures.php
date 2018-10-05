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

class SovereigntyStructures {
    /**
     * allianceId
     *
     * @var int
     */
    protected $allianceId = null;

    /**
     * solarSystemId
     *
     * @var int
     */
    protected $solarSystemId = null;
    /**
     * structureId
     *
     * @var int
     */
    protected $structureId = null;

    /**
     * structureTypeId
     *
     * @var int
     */
    protected $structureTypeId = null;

    /**
     * vulnerabilityOccupancyLevel
     *
     * @var float
     */
    protected $vulnerabilityOccupancyLevel = null;

    /**
     * vulnerableEndTime
     *
     * @var \DateTime
     */
    protected $vulnerableEndTime = null;

    /**
     * vulnerableStartTime
     *
     * @var \DateTime
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
    public function setAllianceId(int $allianceId) {
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
    public function setSolarSystemId(int $solarSystemId) {
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
    public function setStructureId(int $structureId) {
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
    public function setStructureTypeId(int $structureTypeId) {
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
    public function setVulnerabilityOccupancyLevel(float $vulnerabilityOccupancyLevel) {
        $this->vulnerabilityOccupancyLevel = $vulnerabilityOccupancyLevel;
    }

    /**
     * getVulnerableEndTime
     *
     * @return \DateTime
     */
    public function getVulnerableEndTime() {
        return $this->vulnerableEndTime;
    }

    /**
     * setVulnerableEndTime
     *
     * @param \DateTime $vulnerableEndTime
     */
    public function setVulnerableEndTime(\DateTime $vulnerableEndTime) {
        $this->vulnerableEndTime = $vulnerableEndTime;
    }

    /**
     * getVulnerableStartTime
     *
     * @return \DateTime
     */
    public function getVulnerableStartTime() {
        return $this->vulnerableStartTime;
    }

    /**
     * setVulnerableStartTime
     *
     * @param \DateTime $vulnerableStartTime
     */
    public function setVulnerableStartTime(\DateTime $vulnerableStartTime) {
        $this->vulnerableStartTime = $vulnerableStartTime;
    }
}
