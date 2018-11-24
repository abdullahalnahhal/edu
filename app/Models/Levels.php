<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Levels extends Model
{
	use SoftDeletes;

	protected $table = 'levels';
  	public $timestamps = true;

  	protected $fillable = [
    	'level',
  	];

	public function years()
  	{
  		return $this->hasMany('App\Models\Years', 'level_id', 'id');
  	}

    public function terms()
    {
        return $this->hasManyThrough('App\Models\Terms', 'App\Models\Years');
    }
}
