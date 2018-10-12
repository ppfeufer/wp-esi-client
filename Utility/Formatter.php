<?php

/*
 * Copyright (C) 2018 p.pfeufer
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

namespace WordPress\EsiClient\Utility;

/**
 * Formatter abstraction
 */
//abstract class Formatter {
interface Formatter {
    /**
     * Flush output and send contents to the output device
     */
    abstract public function flush();

    /**
     * Generate a base entity
     *
     * @param  string|array $type
     * @param  string|null $text
     * @param  string|array|null $meta
     * @param  string|null $uri
     */
    abstract public function text($type, $text = null, $meta = null, $uri = null);

    /**
     * Generate container start token
     *
     * @param  string|array $type
     * @param  string|bool $label
     */
    public function startContain($type = '', $label = false);

    /**
     * Generate container ending token
     */
    public function endContain();

    /**
     * Generate empty group token
     *
     * @param  string $prefix
     */
    public function emptyGroup($prefix = '');

    /**
     * Generate group start token
     *
     * This method must return boolean TRUE on success, false otherwise (eg. max depth reached).
     * The evaluator will skip this group on FALSE
     *
     * @param   string $prefix
     * @return  bool
     */
    public function startGroup($prefix = '');

    /**
     * Generate group ending token
     */
    public function endGroup();

    /**
     * Generate section title
     *
     * @param  string $title
     */
    public function sectionTitle($title);

    /**
     * Generate row start token
     */
    public function startRow();

    /**
     * Generate row ending token
     */
    public function endRow();

    /**
     * Column divider (cell delimiter)
     *
     * @param  int $padLen
     */
    public function colDiv($padLen = null);

    /**
     * Generate modifier tokens
     *
     * @param  array $items
     */
    public function bubbles(array $items);

    /**
     * Input expression start
     */
    public function startExp();

    /**
     * Input expression end
     */
    public function endExp();

    /**
     * Root starting token
     */
    public function startRoot();

    /**
     * Root ending token
     */
    public function endRoot();

    /**
     * Separator token
     *
     * @param  string $label
     */
    public function sep($label = ' ');

    /**
     * Resolve cache request
     *
     * If the ID is not present in the cache, then a new cache entry is created
     * for the given ID, and string offsets are captured until cacheLock is called
     *
     * This method must return TRUE if the ID exists in the cache, and append the cached item
     * to the output, FALSE otherwise.
     *
     * @param   string $id
     * @return  bool
     */
    public function didCache($id);

    /**
     * Ends cache capturing for the given ID
     *
     * @param  string $id
     */
    public function cacheLock($id);
}
