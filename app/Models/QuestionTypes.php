<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class QuestionTypes extends Model
{
	protected $table = 'questions_types';
  	public $timestamps = true;

  	protected $fillable = [
    	'type',
  	];
}
