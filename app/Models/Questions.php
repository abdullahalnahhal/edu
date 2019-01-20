<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Questions extends Model
{
	use SoftDeletes;

	protected $table = 'questions';
  	public $timestamps = true;

  	protected $fillable = [
        'title',
        'duration',
        'points',
        'multi_answers',
        'level_id',
        'year_id',
        'term_id',
        'subject_id',
        'unit_id',
    	  'type_id',
  	];

	public function level()
    {
        return $this->belongsTo('App\Models\Levels', 'level_id', 'id');
    }

    public function year()
    {
        return $this->belongsTo('App\Models\Years', 'year_id', 'id');
    }

    public function term()
    {
        return $this->belongsTo('App\Models\Terms', 'term_id', 'id');
    }

		public function subject()
    {
        return $this->belongsTo('App\Models\Subjects', 'subject_id', 'id');
    }

		public function unit()
    {
        return $this->belongsTo('App\Models\Units', 'unit_id', 'id');
    }

    public function type()
    {
        return $this->belongsTo('App\Models\QuestionTypes', 'type_id', 'id');
    }

    public function answers()
    {
        return $this->hasMany('App\Models\Answers', 'question_id', 'id');
    }
}
