<?php

namespace App\Http\Controllers\TeachersControllers;

use Illuminate\Http\Request;
use App\Http\Requests\GroupsRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\QuestionTypes;

class QuestionTypesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function index()
    {
        $question_types = QuestionTypes::all();
        return view('teachers.question-types.index', [
            'question_types'=>$question_types
        ]);
    }
}
