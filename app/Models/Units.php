<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Units extends Model
{
	// use SoftDeletes;

	protected $table = 'units';
    public $timestamps = true;

    protected $fillable = [
        'unit',
        'subject_id',
        'level_id',
        'year_id',
        'term_id',
  	];

	public function level()
    {
        return $this->hasOne('App\Models\Levels', 'id', 'level_id');
    }
    public function year()
    {
        return $this->hasOne('App\Models\Years', 'id', 'year_id');
    }
    public function term()
    {
        return $this->hasOne('App\Models\Terms', 'id', 'term_id');
    }
    public function subject()
    {
        return $this->hasOne('App\Models\Subjects', 'id', 'subject_id');
    }
}
