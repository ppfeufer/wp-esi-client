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

namespace WordPress\EsiClient\Model\Killmails\KillmailId\KillmailHash;

use \WordPress\EsiClient\Mapper\JsonMapper;

class Item {
    /**
     * flag
     *
     * Flag for the location of the item
     *
     * @var int
     */
    protected $flag = null;

    /**
     * itemTypeId
     *
     * @var int
     */
    protected $itemTypeId = null;

    /**
     * items
     *
     * @var array
     */
    protected $items = null;

    /**
     * quantityDestroyed
     *
     * How many of the item were destroyed if any
     *
     * @var int
     */
    protected $quantityDestroyed = null;

    /**
     * quantityDropped
     *
     * How many of the item were dropped if any
     *
     * @var int
     */
    protected $quantityDropped = null;

    /**
     * singleton
     * @var int
     */
    protected $singleton = null;

    /**
     * getFlag
     *
     * @return int
     */
    public function getFlag() {
        return $this->flag;
    }

    /**
     * setFlag
     *
     * @param int $flag
     */
    protected function setFlag(int $flag) {
        $this->flag = $flag;
    }

    /**
     * getItemTypeId
     *
     * @return int
     */
    public function getItemTypeId() {
        return $this->itemTypeId;
    }

    /**
     * setItemTypeId
     *
     * @param int $itemTypeId
     */
    protected function setItemTypeId(int $itemTypeId) {
        $this->itemTypeId = $itemTypeId;
    }

    /**
     * getItems
     *
     * @return array
     */
    public function getItems() {
        return $this->items;
    }

    /**
     * setItems
     *
     * @param array $items
     */
    protected function setItems(array $items) {
        $mapper = new JsonMapper;

        $this->items = $mapper->mapArray($items, [], '\\WordPress\EsiClient\Model\Killmails\KillmailId\KillmailHash\Items');
    }

    /**
     * getQuantityDestroyed
     *
     * @return int
     */
    public function getQuantityDestroyed() {
        return $this->quantityDestroyed;
    }

    /**
     * setQuantityDestroyed
     *
     * @param int $quantityDestroyed
     */
    protected function setQuantityDestroyed(int $quantityDestroyed = null) {
        $this->quantityDestroyed = $quantityDestroyed;
    }

    /**
     * getQuantityDropped
     *
     * @return int
     */
    public function getQuantityDropped() {
        return $this->quantityDropped;
    }

    /**
     * setQuantityDropped
     *
     * @param int $quantityDropped
     */
    protected function setQuantityDropped(int $quantityDropped = null) {
        $this->quantityDropped = $quantityDropped;
    }

    /**
     * getSingleton
     *
     * @return int
     */
    public function getSingleton() {
        return $this->singleton;
    }

    /**
     * setSingletion
     *
     * @param int $singleton
     */
    protected function setSingleton(int $singleton) {
        $this->singleton = $singleton;
    }
}
