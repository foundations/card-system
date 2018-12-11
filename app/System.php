<?php
namespace App; use Illuminate\Database\Eloquent\Model; class System extends Model { protected $guarded = array(); private static $systems = array(); public static function _init() { \Log::debug('SystemSetting._init'); static::$systems = \Cache::rememberForever('settings.all', function () { \Log::debug('SystemSetting._init.fetch from database'); $spa79908 = System::query()->get()->toArray(); foreach ($spa79908 as $spf2168e) { static::$systems[$spf2168e['name']] = $spf2168e['value']; } return static::$systems; }); static::$systems['_initialized'] = true; } public static function _get($sp3d006c, $spb97f86 = NULL) { if (!isset(static::$systems['_initialized'])) { static::_init(); } if (isset(static::$systems[$sp3d006c])) { return static::$systems[$sp3d006c]; } return $spb97f86; } public static function _getInt($sp3d006c, $spb97f86 = NULL) { return (int) static::_get($sp3d006c, $spb97f86); } public static function _set($sp3d006c, $sp4d089d) { static::$systems[$sp3d006c] = $sp4d089d; $spc86f28 = System::query()->where('name', $sp3d006c)->first(); if ($spc86f28) { $spc86f28->value = $sp4d089d; $spc86f28->save(); } else { try { System::query()->insert(array('name' => $sp3d006c, 'value' => $sp4d089d)); } catch (\Exception $spa0e498) { } } self::flushCache(); } public static function flushCache() { \Log::debug('SystemSetting.flushCache'); \Cache::forget('settings.all'); } protected static function boot() { parent::boot(); static::updated(function () { self::flushCache(); }); static::created(function () { self::flushCache(); }); } }