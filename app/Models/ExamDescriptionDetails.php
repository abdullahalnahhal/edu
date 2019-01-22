<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ExamDescriptionDetails extends Model
{
	use SoftDeletes;

    protected $table = 'exam_description_details';
    public $timestamps = true;

    protected $fillable = [
        'exam_id',
        'type_id',
        'unit_id',
        'max_points',
        'min_points'
  	];

    public function exam()
  	{
  		return $this->hasOne('App\Models\Exams', 'id', 'exam_id');
  	}
    public function type()
  	{
  		return $this->hasOne('App\Models\QuestionTypes', 'id', 'type_id');
  	}
    public function unit()
  	{
  		return $this->hasOne('App\Models\Units', 'id', 'unit_id');
  	}

}
