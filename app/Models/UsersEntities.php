<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UsersEntities extends Model
{
	use SoftDeletes;

	protected $table = 'users_entities';
    public $timestamps = true;

    protected $fillable = [
      'entity',
      'shortcut',
    ];

    public static function byShortcut(String $shortcut)
    {
    	return self::where('shortcut', strtoupper($shortcut))->first();
    }

    public function check(String $shortcut)
    {
      $shortcut = strtoupper($shortcut);
      if ($this->shortcut == $shortcut) {
          return true;
      }
      return false;
    }

}
