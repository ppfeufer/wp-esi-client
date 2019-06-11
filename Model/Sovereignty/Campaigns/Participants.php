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

namespace WordPress\EsiClient\Model\Sovereignty\Campaigns;

class Participants {
    /**
     * allianceId
     *
     * @var int
     */
    protected $allianceId = null;

    /**
     * score
     *
     * @var float
     */
    protected $score = null;

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
     * getScore
     *
     * @return float
     */
    public function getScore() {
        return $this->score;
    }

    /**
     * setScore
     *
     * @param float $score
     */
    protected function setScore(float $score) {
        $this->score = $score;
    }
}
