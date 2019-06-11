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

class Character {
    /**
     * daysOfActivity
     *
     * @var int
     */
    protected $daysOfActivity = 0;

    /**
     * minutes
     *
     * @var int
     */
    protected $minutes = 0;

    /**
     * sessionsStarted
     *
     * @var int
     */
    protected $sessionsStarted = 0;

    /**
     * getDaysOfActivity
     *
     * @return int
     */
    public function getDaysOfActivity() {
        return $this->daysOfActivity;
    }

    /**
     * getMinutes
     *
     * @return int
     */
    public function getMinutes() {
        return $this->minutes;
    }

    /**
     * getSessionsStarted
     *
     * @return int
     */
    public function getSessionsStarted() {
        return $this->sessionsStarted;
    }

    /**
     * setDaysOfActivity
     *
     * @param int $daysOfActivity
     */
    protected function setDaysOfActivity(int $daysOfActivity) {
        $this->daysOfActivity = $daysOfActivity;
    }

    /**
     * setMinutes
     *
     * @param int $minutes
     */
    protected function setMinutes(int $minutes) {
        $this->minutes = $minutes;
    }

    /**
     * setSessionsStarted
     *
     * @param int $sessionsStarted
     */
    protected function setSessionsStarted(int $sessionsStarted) {
        $this->sessionsStarted = $sessionsStarted;
    }
}
