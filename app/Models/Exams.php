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
	public function detailsDescription()
  	{
  		return $this->hasMany('App\Models\ExamDescriptionDetails', 'exam_id', 'id');
  	}
}
