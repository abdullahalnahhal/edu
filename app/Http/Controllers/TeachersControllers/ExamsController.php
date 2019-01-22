<?php

namespace App\Http\Controllers\TeachersControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Exams;
use App\Models\ExamDescriptionDetails;

class ExamsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index()
    {
        $exams = Exams::all();
        return view('teachers.exams.index', [
            'exams'=>$exams
        ]);
    }
    // public function get($id)
    // {
    //     $question = Questions::find($id);
    //     return view('teachers.questions.view', [
    //         'question'=>$question,
    //     ]);
    // }
    public function new()
    {
        return view('teachers.exams.form', [
            'action'=>'new'
        ]);
    }

    // public function edit($id)
    // {
    //     $questions = Questions::find($id);
    //     return view('teachers.questions.form', [
    //         'question'=>$questions,
    //         'action'=>'edit',
    //     ]);
    // }

    public function create(Request $request)
    {
        $questions = $request->all()['questions-numbers'];
        $questions = explode(",", $questions);
        $exam = new Exams;
        $exam->title = $request->title;
        $exam->year_id = $request->year_id;
        $exam->term_id = $request->term_id;
        $exam->subject_id = $request->subject_id;
        $exam->question_number = count($questions);
        if ($exam->save()) {
            foreach ($questions as  $question) {
                $details = new ExamDescriptionDetails;
                $details->exam_id = $exam->id;
                $details->type_id = $request->{'question_type_id-'.$question};
                $details->unit_id = $request->{'unit-'.$question};
                $details->max_points = $request->{'max_points-'.$question};
                $details->min_points = $request->{'min_points-'.$question};
                if ($details->save()) {
                    return redirect()->route('teachers.exams')->with('created', 'Created Successfully ... !');
                }
            }
        }
        return back()->withErrors('Not Created Please Call Engineer ... !');
    }
    //
    // public function update (Request $request, $id)
    // {
    //     $question = Questions::find($id);
    //     $question->title = $request->title;
    //     $question->duration = $request->duration;
    //     $question->points = $request->points;
    //     $question->level_id = $request->level_id;
    //     $question->year_id = $request->year_id;
    //     $question->term_id = $request->term_id;
    //     $question->subject_id = $request->subject_id;
    //     $question->unit_id = $request->unit_id;
    //     $question->type_id = $request->type_id;
    //     $answers = explode(",", $request->all()['answer-numbers']);
    //     $is_correct =  $request->all()['is-correct'];
    //     if (Answers::whereIn('id', $question->answers->pluck('id')->toArray())->delete()) {
    //         if ($question->save()) {
    //             foreach ($answers as $value) {
    //                 $answer = new Answers;
    //                 $answer->question_id = $question->id;
    //                 $answer->answer = $request->all()['answer-'.$value];
    //                 if (in_array((string) $value, $is_correct)) {
    //                     $answer->is_correct = "1";
    //                 }
    //                 if (!$answer->save()) {
    //                     return back()->withErrors('Not Updated Please Call Engineer ... !');
    //                 }
    //             }
    //             return redirect()->route('teachers.questions')->with('updated', 'Updated Successfully ... !');
    //         }
    //     }
    //
    //     return back()->withErrors('Not Updated Please Call Engineer ... !');
    // }
    // public function delete ($id)
    // {
    //     $questions = Questions::find($id);
    //     if ($questions->count() && $questions->delete()) {
    //         return redirect()->route('teachers.questions')->with('deleted', 'Removed Successfully ... !');
    //     }
    //     return back()->withErrors('Not Removed Please Call Engineer ... !');
    // }
}
