<?php
interface ILogHandler { public function write($spfb4ab0); } class CLogFileHandler implements ILogHandler { private $handle = null; public function __construct($spe4461d = '') { $this->handle = fopen($spe4461d, 'a'); } public function write($spfb4ab0) { fwrite($this->handle, $spfb4ab0, 4096); } public function __destruct() { fclose($this->handle); } } class Log { private $handler = null; private $level = 15; private static $instance = null; private function __construct() { } private function __clone() { } public static function Init($spc8b2dd = null, $spd41c76 = 15) { if (!self::$instance instanceof self) { self::$instance = new self(); self::$instance->__setHandle($spc8b2dd); self::$instance->__setLevel($spd41c76); } return self::$instance; } private function __setHandle($spc8b2dd) { $this->handler = $spc8b2dd; } private function __setLevel($spd41c76) { $this->level = $spd41c76; } public static function DEBUG($spfb4ab0) { self::$instance->write(1, $spfb4ab0); } public static function WARN($spfb4ab0) { self::$instance->write(4, $spfb4ab0); } public static function ERROR($spfb4ab0) { $spfe1a28 = debug_backtrace(); $spee09c6 = '['; foreach ($spfe1a28 as $spc95936 => $spfa4469) { if (array_key_exists('file', $spfa4469)) { $spee09c6 .= ',file:' . $spfa4469['file']; } if (array_key_exists('line', $spfa4469)) { $spee09c6 .= ',line:' . $spfa4469['line']; } if (array_key_exists('function', $spfa4469)) { $spee09c6 .= ',function:' . $spfa4469['function']; } } $spee09c6 .= ']'; self::$instance->write(8, $spee09c6 . $spfb4ab0); } public static function INFO($spfb4ab0) { self::$instance->write(2, $spfb4ab0); } private function getLevelStr($spd41c76) { switch ($spd41c76) { case 1: return 'debug'; break; case 2: return 'info'; break; case 4: return 'warn'; break; case 8: return 'error'; break; default: } } protected function write($spd41c76, $spfb4ab0) { if (($spd41c76 & $this->level) == $spd41c76) { $spfb4ab0 = '[' . date('Y-m-d H:i:s') . '][' . $this->getLevelStr($spd41c76) . '] ' . $spfb4ab0 . '
'; $this->handler->write($spfb4ab0); } } }