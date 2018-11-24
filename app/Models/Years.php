<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Years extends Model
{
	use SoftDeletes;

	protected $table = 'years';
  	public $timestamps = true;

  	protected $fillable = [
    	'year',
    	'level_id',
  	];

  	public function level ()
  	{
  		return $this->hasOne('App\Models\Levels', 'id', 'level_id');
  	}
    public function terms()
    {
        return $this->hasMany('App\Models\Terms', 'year_id', 'id');      
    }

}
