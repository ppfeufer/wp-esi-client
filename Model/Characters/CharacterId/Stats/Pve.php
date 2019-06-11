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

class Pve {
    /**
     * dungeonsCompletedAgent
     *
     * @var int
     */
    protected $dungeonsCompletedAgent = 0;

    /**
     * dungeonsCompletedDistribution
     *
     * @var int
     */
    protected $dungeonsCompletedDistribution = 0;

    /**
     * missionsSucceeded
     *
     * @var int
     */
    protected $missionsSucceeded = 0;

    /**
     * missionsSucceededEpicArc
     *
     * @var int
     */
    protected $missionsSucceededEpicArc = 0;

    /**
     * getDungeonsCompletedAgent
     *
     * @return int
     */
    public function getDungeonsCompletedAgent() {
        return $this->dungeonsCompletedAgent;
    }

    /**
     * getDungeonsCompletedDistribution
     *
     * @return int
     */
    public function getDungeonsCompletedDistribution() {
        return $this->dungeonsCompletedDistribution;
    }

    /**
     * getMissionsSucceeded
     *
     * @return int
     */
    public function getMissionsSucceeded() {
        return $this->missionsSucceeded;
    }

    /**
     * getMissionsSucceededEpicArc
     *
     * @return int
     */
    public function getMissionsSucceededEpicArc() {
        return $this->missionsSucceededEpicArc;
    }

    /**
     * setDungeonsCompletedAgent
     *
     * @param int $dungeonsCompletedAgent
     */
    protected function setDungeonsCompletedAgent(int $dungeonsCompletedAgent) {
        $this->dungeonsCompletedAgent = $dungeonsCompletedAgent;
    }

    /**
     * setDungeonsCompletedDistribution
     *
     * @param int $dungeonsCompletedDistribution
     */
    protected function setDungeonsCompletedDistribution(int $dungeonsCompletedDistribution) {
        $this->dungeonsCompletedDistribution = $dungeonsCompletedDistribution;
    }

    /**
     * setMissionsSucceeded
     *
     * @param int $missionsSucceeded
     */
    protected function setMissionsSucceeded(int $missionsSucceeded) {
        $this->missionsSucceeded = $missionsSucceeded;
    }

    /**
     * setMissionsSucceededEpicArc
     *
     * @param int $missionsSucceededEpicArc
     */
    protected function setMissionsSucceededEpicArc(int $missionsSucceededEpicArc) {
        $this->missionsSucceededEpicArc = $missionsSucceededEpicArc;
    }
}
