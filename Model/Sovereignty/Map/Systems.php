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

namespace WordPress\EsiClient\Model\Sovereignty\Map;

class Systems {
    /**
     * allianceId
     *
     * @var int
     */
    protected $allianceId = null;

    /**
     * corporationId
     *
     * @var int
     */
    protected $corporationId = null;

    /**
     * factionId
     *
     * @var int
     */
    protected $factionId = null;

    /**
     * systemId
     *
     * @var int
     */
    protected $systemId = null;

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
     * getSystemId
     *
     * @return int
     */
    public function getSystemId() {
        return $this->systemId;
    }

    /**
     * setSystemId
     *
     * @param int $systemId
     */
    protected function setSystemId(int $systemId) {
        $this->systemId = $systemId;
    }
}
