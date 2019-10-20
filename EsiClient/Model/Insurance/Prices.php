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

namespace WordPress\EsiClient\Model\Insurance;

use \WordPress\EsiClient\Mapper\JsonMapper;

/**
 * Return available insurance levels for all ship types
 *
 * This route is cached for up to 3600 seconds
 */
class Prices {
    /**
     * levels
     *
     * A list of a available insurance levels for this ship type
     *
     * @var array
     */
    protected $levels = null;

    /**
     * typeId
     *
     * @var int
     */
    protected $typeId = null;

    /**
     * getLevels
     *
     * A list of a available insurance levels for this ship type
     *
     * @return array
     */
    public function getLevels() {
        return $this->levels;
    }

    /**
     * setLevels
     *
     * A list of a available insurance levels for this ship type
     *
     * @param array $levels
     */
    protected function setLevels(array $levels) {
        $mapper = new JsonMapper;

        $this->attackers = $mapper->mapArray($levels, [], '\\WordPress\EsiClient\Model\Insurance\Prices\Levels');
    }

    /**
     * getTypeId
     *
     * @return int
     */
    public function getTypeId() {
        return $this->typeId;
    }

    /**
     * setTypeId
     *
     * @param int $typeId
     */
    protected function setTypeId(int $typeId) {
        $this->typeId = $typeId;
    }
}
