<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Exams extends Model
{
	use SoftDeletes;

	protected $table = 'exams';
  	public $timestamps = true;

  	protected $fillable = [
      'title',
      'year_id',
      'term_id',
      'subject_id',
    	'question_number',
  	];
}
