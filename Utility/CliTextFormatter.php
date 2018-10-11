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
 * Text formatter with color support for CLI -- unfinished
 *
 */
class CliTextFormatter extends \WordPress\EsiClient\Utility\TextFormatter {
    public function sectionTitle($title) {
        $pad = \str_repeat(' ', $this->indent + 2);
        $this->out .= \sprintf("\n\n%s\x1b[4;97m%s\x1b[0m", $pad, $title);
    }

    public function startExp() {
        $this->out .= "\x1b[1;44;96m ";
    }

    public function endExp() {
        if(\WordPress\EsiClient\Utility\DebugUtility::config('showBacktrace') && ($trace = \WordPress\EsiClient\Utility\DebugUtility::getBacktrace())) {
            $this->out .= "\x1b[0m\x1b[44;36m " . $trace['file'] . ':' . $trace['line'];
        }

        $this->out .= " \x1b[0m\n";
    }

    public function endRoot() {
        $this->out .= "\n";

        if(($timeout = \WordPress\EsiClient\Utility\DebugUtility::getTimeoutPoint()) > 0) {
            $this->out .= \sprintf("\n\x1b[3;91m-- Listing incomplete. Timed-out after %4.2fs --\x1b[0m\n", $timeout);
        }
    }
}
