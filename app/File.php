<?php
namespace App; use Illuminate\Database\Eloquent\Model; class File extends Model { protected $guarded = array(); public $timestamps = false; function deleteFile() { try { Storage::disk($this->driver)->delete($this->path); } catch (\Exception $spa0e498) { \Log::error('File.deleteFile Error: ' . $spa0e498->getMessage(), array('exception' => $spa0e498)); } } public static function getProductFolder() { return 'images/product'; } }