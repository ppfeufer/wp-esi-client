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
 * Generates the output in plain text format
 *
 */
class TextFormatter extends Formatter {
    /**
     * Actual output
     *
     * @var  string
     */
    protected $out = '';

    /**
     * Tracks current nesting level
     *
     * @var  int
     */
    protected $level = 0;

    /**
     * Current indenting level
     *
     * @var  int
     */
    protected $indent = 0;

    protected $lastIdx = 0;
    protected $lastLineSt = 0;
    protected $levelPad = [0];

    public function flush() {
        print $this->out;
        $this->out = '';
        $this->cache = [];
    }

    public function sep($label = ' ') {
        $this->out .= $label;
    }

    public function text($type, $text = null, $meta = null, $uri = null) {
        if(!\is_array($type)) {
            $type = (array) $type;
        }

        if($text === null) {
            $text = $type[0];
        }

        if(\in_array('special', $type, true)) {
            $text = \strtr($text, [
                "\r" => '\r', // carriage return
                "\t" => '\t', // horizontal tab
                "\n" => '\n', // linefeed (new line)
                "\v" => '\v', // vertical tab
                "\e" => '\e', // escape
                "\f" => '\f', // form feed
                "\0" => '\0',
            ]);

            $this->out .= $text;

            return;
        }

        $formatMap = [
            'string' => '%3$s "%2$s"',
            'integer' => 'int(%2$s)',
            'double' => 'double(%2$s)',
            'true' => 'bool(%2$s)',
            'false' => 'bool(%2$s)',
            'key' => '[%2$s]',
        ];

        if(!\is_string($meta)) {
            $meta = '';
        }

        $this->out .= isset($formatMap[$type[0]]) ? \sprintf($formatMap[$type[0]], $type[0], $text, $meta) : $text;
    }

    public function startContain($type, $label = false) {
        if(!\is_array($type)) {
            $type = (array) $type;
        }

        if($label) {
            $this->out .= "\n" . \str_repeat(' ', $this->indent + $this->levelPad[$this->level]) . "┗ {$type[0]} ~ ";
        }
    }

    public function emptyGroup($prefix = '') {
        $this->out .= "({$prefix})";
    }

    public function startGroup($prefix = '') {
        $maxDepth = \WordPress\EsiClient\Utility\DebugUtility::config('maxDepth');

        if(($maxDepth > 0) && (($this->level + 1) > $maxDepth)) {
            $this->emptyGroup('...');

            return false;
        }

        $this->level++;
        $this->out .= '(';

        $this->indent += $this->levelPad[$this->level - 1];

        return true;
    }

    public function endGroup() {
        $this->out .= "\n" . \str_repeat(' ', $this->indent) . ')';
        $this->indent -= $this->levelPad[$this->level - 1];
        $this->level--;
    }

    public function sectionTitle($title) {
        $pad = \str_repeat(' ', $this->indent + 2);
        $this->out .= \sprintf("\n\n%s%s\n%s%s", $pad, $title, $pad, \str_repeat('-', \strlen($title)));
    }

    public function startRow() {
        $this->out .= "\n  " . \str_repeat(' ', $this->indent);
        $this->lastLineSt = \strlen($this->out);
    }

    public function endRow() {
        return;
    }

    public function colDiv($padLen = null) {
        $this->out .= \str_repeat(' ', ($padLen !== null) ? $padLen + 1 : 1);

        $this->lastIdx = \strlen($this->out);
        $this->levelPad[$this->level] = $this->lastIdx - $this->lastLineSt + 2;
    }

    public function bubbles(array $items) {
        if(!$items) {
            $this->out .= '  ';
            return;
        }

        $this->out .= '<';

        foreach($items as $item) {
            $this->out .= $item[0];
        }

        $this->out .= '>';
    }

    public function endExp() {
        if(\WordPress\EsiClient\Utility\DebugUtility::config('showBacktrace') && ($trace = \WordPress\EsiClient\Utility\DebugUtility::getBacktrace())) {
            $this->out .= ' - ' . $trace['file'] . ':' . $trace['line'];
        }

        $this->out .= "\n" . \str_repeat('=', \strlen($this->out)) . "\n";
    }

    public function startRoot() {
        $this->out .= "\n\n";
    }

    public function endRoot() {
        $this->out .= "\n";

        if(($timeout = \WordPress\EsiClient\Utility\DebugUtility::getTimeoutPoint()) > 0) {
            $this->out .= \sprintf("\n-- Listing incomplete. Timed-out after %4.2fs -- \n", $timeout);
        }
    }
}
