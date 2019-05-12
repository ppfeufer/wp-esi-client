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

namespace WordPress\EsiClient\Model\Characters\CharacterId;

/**
 * Requires the following scope: esi-characterstats.read.v1
 * Returns aggregate yearly stats for a character
 *
 * @author ppfeufer
 */
class Stats {
    protected $character = null;
    protected $combat = null;
    protected $industry = null;
    protected $inventory = null;
    protected $isk = null;
    protected $market = null;
    protected $mining = null;
    protected $module = null;
    protected $orbital = null;
    protected $pve = null;
    protected $social = null;
    protected $travel = null;
}
