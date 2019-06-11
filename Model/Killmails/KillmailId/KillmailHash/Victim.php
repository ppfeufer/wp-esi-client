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

class Victim {
    /**
     * allianceId
     *
     * @var int
     */
    protected $allianceId = null;

    /**
     * characterId
     *
     * @var int
     */
    protected $characterId = null;

    /**
     * corporationId
     *
     * @var int
     */
    protected $corporationId = null;

    /**
     * damageTaken
     *
     * How much total damage was taken by the victim
     *
     * @var int
     */
    protected $damageTaken = null;

    /**
     * factionId
     *
     * @var int
     */
    protected $factionId = null;

    /**
     * items
     *
     * @var array
     */
    protected $items = null;

    /**
     * position
     *
     * @var Position
     */
    protected $position = null;

    /**
     * shipTypeId
     *
     * The ship that the victim was piloting and was destroyed
     *
     * @var int
     */
    protected $shipTypeId = null;

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
     * getCharacterId
     *
     * @return int
     */
    public function getCharacterId() {
        return $this->characterId;
    }

    /**
     * setCharacterId
     *
     * @param int $characterId
     */
    protected function setCharacterId(int $characterId) {
        $this->characterId = $characterId;
    }

    /**
     * getCorporationId
     *
     * @return int
     */
    public function getCorporationId() {
        return $this->corporationId;
    }

    /**
     * setCorporationId
     *
     * @param int $corporationId
     */
    protected function setCorporationId(int $corporationId) {
        $this->corporationId = $corporationId;
    }

    /**
     * getDamageTaken
     *
     * @return int
     */
    public function getDamageTaken() {
        return $this->damageTaken;
    }

    /**
     * setDamageTaken
     *
     * @param int $damageTaken
     */
    protected function setDamageTaken(int $damageTaken) {
        $this->damageTaken = $damageTaken;
    }

    /**
     * getFactionId
     *
     * @return int
     */
    public function getFactionId() {
        return $this->factionId;
    }

    /**
     * setFactionId
     *
     * @param int $factionId
     */
    protected function setFactionId(int $factionId) {
        $this->factionId = $factionId;
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

        $this->items = $mapper->mapArray($items, [], '\\WordPress\EsiClient\Model\Killmails\KillmailId\KillmailHash\Item');
    }

    /**
     * getPosition
     *
     * @return Position
     */
    public function getPosition() {
        return $this->position;
    }

    /**
     * setPosition
     *
     * @param Position $position
     */
    protected function setPosition(Position $position) {
        $this->position = $position;
    }

    /**
     * getShipTypeId
     *
     * What ship was the attacker flying
     *
     * @return int
     */
    public function getShipTypeId() {
        return $this->shipTypeId;
    }

    /**
     * setShipTypeId
     *
     * What ship was the attacker flying
     *
     * @param int $shipTypeId
     */
    protected function setShipTypeId(int $shipTypeId) {
        $this->shipTypeId = $shipTypeId;
    }
}
