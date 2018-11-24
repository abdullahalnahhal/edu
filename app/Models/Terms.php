<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Terms extends Model
{
	// use SoftDeletes;

	protected $table = 'terms';
    public $timestamps = true;

    protected $fillable = [
        'term',
        'year_id',
  	];

	public function year()
  	{
  		return $this->hasOne('App\Models\Years', 'id', 'year_id');
  	}
}
