<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Answers extends Model
{
	use SoftDeletes;

    protected $table = 'answers';
    public $timestamps = true;
    
    protected $fillable = [
        'question_id',
        'answer',
        'is_correct'
  	];

	public function question()
  	{
  		return $this->hasOne('App\Models\Questions', 'id', 'question_id');
  	}

}
