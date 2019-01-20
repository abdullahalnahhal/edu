<?php

namespace App\Http\Controllers\TeachersControllers;

use Illuminate\Http\Request;
use App\Http\Requests\GroupsRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Questions;
use App\Models\Answers;

class QuestionsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index()
    {
        $questions = Questions::all();
        return view('teachers.questions.index', [
            'questions'=>$questions
        ]);
    }
    // public function get($id)
    // {
    //     $group = Groups::find($id);
    //     return view('teachers.groups.view', [
    //         'group'=>$group,
    //     ]);
    // }
    public function new()
    {
        return view('teachers.questions.form', [
            'action'=>'new'
        ]);
    }

    public function edit($id)
    {
        $questions = Questions::find($id);
        return view('teachers.questions.form', [
            'question'=>$questions,
            'action'=>'edit',
        ]);
    }

    public function create(Request $request)
    {
        $question = new Questions;
        $question->title = $request->title;
        $question->duration = $request->duration;
        $question->points = $request->points;
        $question->level_id = $request->level_id;
        $question->year_id = $request->year_id;
        $question->term_id = $request->term_id;
        $question->subject_id = $request->subject_id;
        $question->unit_id = $request->unit_id;
        $question->type_id = $request->type_id;
        $answers = explode(",", $request->all()['answer-numbers']);
        $is_correct =  $request->all()['is-correct'];
        if ($question->save()) {
            foreach ($answers as $value) {
                $answer = new Answers;
                $answer->question_id = $question->id;
                $answer->answer = $request->all()['answer-'.$value];
                if (in_array((string) $value, $is_correct)) {
                    $answer->is_correct = "1";
                }
                if (!$answer->save()) {
                    return back()->withErrors('Not Created Please Call Engineer ... !');
                }
            }
            return redirect()->route('teachers.questions')->with('created', 'Created Successfully ... !');
        }
        return back()->withErrors('Not Created Please Call Engineer ... !');
    }

    public function update (Request $request, $id)
    {
        $question = Questions::find($id);
        $question->title = $request->title;
        $question->duration = $request->duration;
        $question->points = $request->points;
        $question->level_id = $request->level_id;
        $question->year_id = $request->year_id;
        $question->term_id = $request->term_id;
        $question->subject_id = $request->subject_id;
        $question->unit_id = $request->unit_id;
        $question->type_id = $request->type_id;
        $answers = explode(",", $request->all()['answer-numbers']);
        $is_correct =  $request->all()['is-correct'];
        if (Answers::whereIn('id', $question->answers->pluck('id')->toArray())->delete()) {
            if ($question->save()) {
                foreach ($answers as $value) {
                    $answer = new Answers;
                    $answer->question_id = $question->id;
                    $answer->answer = $request->all()['answer-'.$value];
                    if (in_array((string) $value, $is_correct)) {
                        $answer->is_correct = "1";
                    }
                    if (!$answer->save()) {
                        return back()->withErrors('Not Updated Please Call Engineer ... !');
                    }
                }
                return redirect()->route('teachers.questions')->with('updated', 'Updated Successfully ... !');
            }
        }
        
        return back()->withErrors('Not Updated Please Call Engineer ... !');
    }
    public function delete ($id)
    {
        $questions = Questions::find($id);
        if ($questions->count() && $questions->delete()) {
            return redirect()->route('teachers.questions')->with('deleted', 'Removed Successfully ... !');
        }
        return back()->withErrors('Not Removed Please Call Engineer ... !');
    }
}
