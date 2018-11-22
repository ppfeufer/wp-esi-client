<?php

/**
 * Copyright (C) 2017 Rounon Dax
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

namespace WordPress\EsiClient\Repository;

\defined('ABSPATH') or die();

class CharacterRepository extends \WordPress\EsiClient\Swagger {
    /**
     * Used ESI enpoints in this class
     *
     * @var array ESI enpoints
     */
    protected $esiEndpoints = [
        'characters_characterId' => 'characters/{character_id}/?datasource=tranquility',
        'characters_characterId_corporationhistory' => 'characters/{character_id}/corporationhistory/?datasource=tranquility',
        'characters_characterId_portrait' => 'characters/{character_id}/portrait/?datasource=tranquility',
        'characters_affiliation' => 'characters/affiliation/?datasource=tranquility'
    ];

    /**
     * Public information about a character
     *
     * @param int $characterID An EVE character ID
     * @return \WordPress\EsiClient\Model\Character\CharactersCharacterId
     */
    public function charactersCharacterId(int $characterID) {
        $this->setEsiMethod('get');
        $this->setEsiRoute($this->esiEndpoints['characters_characterId']);
        $this->setEsiRouteParameter([
            '/{character_id}/' => $characterID
        ]);
        $this->setEsiVersion('v4');

        return $this->map($this->callEsi(), new \WordPress\EsiClient\Model\Character\CharactersCharacterId);
    }

    /**
     * Get a list of all the corporations a character has been a member of
     *
     * @param int $characterID An EVE character ID
     * @return \WordPress\EsiClient\Model\Character\CharactersCharacterIdCorporationhistory
     */
    public function charactersCharacterIdCorporationhistory(int $characterID) {
        $this->setEsiMethod('get');
        $this->setEsiRoute($this->esiEndpoints['characters_characterId_corporationhistory']);
        $this->setEsiRouteParameter([
            '/{character_id}/' => $characterID
        ]);
        $this->setEsiVersion('v4');

        return $this->map($this->callEsi(), new \WordPress\EsiClient\Model\Character\CharactersCharacterIdCorporationhistory);
    }

    /**
     * Bulk lookup of character IDs to corporation, alliance and faction
     *
     * @param array $characterIds The character IDs to fetch affiliations for. All characters must exist, or none will be returned
     * @return array of \WordPress\EsiClient\Model\Character\CharactersAffiliation
     */
    public function charactersAffiliation(array $characterIds = []) {
        $this->setEsiMethod('post');
        $this->setEsiPostParameter($characterIds);
        $this->setEsiRoute($this->esiEndpoints['characters_affiliation']);
        $this->setEsiVersion('v1');

        return $this->mapArray($this->callEsi(), '\\WordPress\EsiClient\Model\Character\CharactersAffiliation');
    }

    /**
     * Get character portraits
     *
     * @param int $characterID An EVE character ID
     * @return \WordPress\EsiClient\Model\Character\CharactersCharacterIdPortrait
     */
    public function charactersCharacterIdPortrait(int $characterID) {
        $this->setEsiMethod('get');
        $this->setEsiRoute($this->esiEndpoints['characters_characterId_portrait']);
        $this->setEsiRouteParameter([
            '/{character_id}/' => $characterID
        ]);
        $this->setEsiVersion('v2');

        return $this->map($this->callEsi(), new \WordPress\EsiClient\Model\Character\CharactersCharacterIdPortrait);
    }
}
