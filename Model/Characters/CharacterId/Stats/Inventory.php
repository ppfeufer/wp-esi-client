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

class Inventory {
    /**
     * abandonLootQuantity
     *
     * @var int
     */
    protected $abandonLootQuantity = 0;

    /**
     * trashItemQuantity
     *
     * @var int
     */
    protected $trashItemQuantity = 0;

    /**
     * getAbandonLootQuantity
     *
     * @return int
     */
    public function getAbandonLootQuantity() {
        return $this->abandonLootQuantity;
    }

    /**
     * getTrashItemQuantity
     *
     * @return int
     */
    public function getTrashItemQuantity() {
        return $this->trashItemQuantity;
    }

    /**
     * setAbandonLootQuantity
     *
     * @param int $abandonLootQuantity
     */
    protected function setAbandonLootQuantity(int $abandonLootQuantity) {
        $this->abandonLootQuantity = $abandonLootQuantity;
    }

    /**
     * setTrashItemQuantity
     *
     * @param int $trashItemQuantity
     */
    protected function setTrashItemQuantity(int $trashItemQuantity) {
        $this->trashItemQuantity = $trashItemQuantity;
    }
}
