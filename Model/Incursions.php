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

namespace WordPress\EsiClient\Model;

class Incursions {
    /**
     * constellationId
     *
     * The constellation id in which this incursion takes place
     *
     * @var int
     */
    protected $constellationId = null;

    /**
     * factionId
     *
     * The attacking faction's id
     *
     * @var int
     */
    protected $factionId = null;

    /**
     * hasBoss
     *
     * Whether the final encounter has boss or not
     *
     * @var bool
     */
    protected $hasBoss = null;

    /**
     * infestesSolarSystems
     *
     * A list of infested solar system ids that are a part of this incursion
     *
     * @var array
     */
    protected $infestesSolarSystems = null;

    /**
     * influence
     *
     * Influence of this incursion as a float from 0 to 1
     *
     * @var float
     */
    protected $influence = null;

    /**
     * stagingSolarSystemId
     *
     * Staging solar system for this incursion
     *
     * @var int
     */
    protected $stagingSolarSystemId = null;

    /**
     * state
     *
     * The state of this incursion
     *
     * @var string
     */
    protected $state = null;

    /**
     * type
     *
     * The type of this incursion
     *
     * @var string
     */
    protected $type = null;

    /**
     * getConstellationId
     *
     * The constellation id in which this incursion takes place
     *
     * @return int
     */
    public function getConstellationId() {
        return $this->constellationId;
    }

    /**
     * setConstellationId
     *
     * The constellation id in which this incursion takes place
     *
     * @param int $constellationId
     */
    protected function setConstellationId(int $constellationId) {
        $this->constellationId = $constellationId;
    }

    /**
     * getFactionId
     *
     * The attacking faction's id
     *
     * @return int
     */
    public function getFactionId() {
        return $this->factionId;
    }

    /**
     * setFactionId
     *
     * The attacking faction's id
     *
     * @param int $factionId
     */
    protected function setFactionId(int $factionId) {
        $this->factionId = $factionId;
    }

    /**
     * getHasBoss
     *
     * Whether the final encounter has boss or not
     *
     * @return bool
     */
    public function getHasBoss() {
        return $this->hasBoss;
    }

    /**
     * setHasBoss
     *
     * Whether the final encounter has boss or not
     *
     * @param bool $hasBoss
     */
    protected function setHasBoss(bool $hasBoss) {
        $this->hasBoss = $hasBoss;
    }

    /**
     * getInfestedSolarSystems
     *
     * A list of infested solar system ids that are a part of this incursion
     *
     * @return array
     */
    public function getInfestedSolarSystems() {
        return $this->infestesSolarSystems;
    }

    /**
     * setInfestedSolarSystems
     *
     * A list of infested solar system ids that are a part of this incursion
     *
     * @param array $infestedSolarSystems
     */
    protected function setInfestedSolarSystems(array $infestedSolarSystems) {
        $this->infestesSolarSystems = $infestedSolarSystems;
    }

    /**
     * getInfluence
     *
     * Influence of this incursion as a float from 0 to 1
     *
     * @return float
     */
    public function getInfluence() {
        return $this->influence;
    }

    /**
     * setInfluence
     *
     * Influence of this incursion as a float from 0 to 1
     *
     * @param float $influence
     */
    protected function setInfluence(float $influence) {
        $this->influence = $influence;
    }

    /**
     * getStagingSolarSystemId
     *
     * Staging solar system for this incursion
     *
     * @return int
     */
    public function getStagingSolarSystemId() {
        return $this->stagingSolarSystemId;
    }

    /**
     * setStagingSolarSystemId
     *
     * Staging solar system for this incursion
     *
     * @param int $stagingSolarSystemId
     */
    protected function setStagingSolarSystemId(int $stagingSolarSystemId) {
        $this->stagingSolarSystemId = $stagingSolarSystemId;
    }

    /**
     * getState
     *
     * The state of this incursion
     *
     * Either:
     *      » withdrawing
     *      » mobilizing
     *      « established
     *
     * @return string
     */
    public function getState() {
        return $this->state;
    }

    /**
     * setState
     *
     * The state of this incursion
     *
     * @param string $state
     */
    protected function setState(string $state) {
        $this->state = $state;
    }

    /**
     * getType
     *
     * The type of this incursion
     *
     * @return string
     */
    public function getType() {
        return $this->type;
    }

    /**
     * setType
     *
     * The type of this incursion
     *
     * @param string $type
     */
    protected function setType(string $type) {
        $this->type = $type;
    }
}
