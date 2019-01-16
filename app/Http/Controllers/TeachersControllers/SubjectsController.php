<?php

namespace App\Http\Controllers\TeachersControllers;

use Illuminate\Http\Request;
use App\Http\Requests\SubjectsRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Subjects;

class SubjectsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $subjects = Subjects::all();
        return view('teachers.subjects.index', [
            'subjects'=>$subjects
        ]);
    }
    public function get($id)
    {
        $subject = Subjects::find($id);
        return view('teachers.subjects.view', [
            'subject'=>$subject,
        ]);
    }
    public function new()
    {
        return view('teachers.subjects.form', [
            'action'=>'new'
        ]);
    }

    public function edit($id)
    {
        $subject = Subjects::find($id);
        return view('teachers.subjects.form', [
            'subject'=>$subject,
            'action'=>'edit',
        ]);
    }

    public function units($id)
    {
        $subjects = Subjects::find($id);
        return $subjects->units->toArray();
    }

    public function create(SubjectsRequest $request, Subjects $subject)
    {
        $subject->subject = $request->subject;
        $subject->level_id = $request->level_id;
        $subject->year_id = $request->year_id;
        $subject->term_id = $request->term_id;
        if ($subject->save()) {
            return redirect()->route('teachers.subjects')->with('created', 'Created Successfully ... !');
        }
        return back()->withErrors('Not Created Please Call Engineer ... !');
    }

    public function update (SubjectsRequest $request, $id)
    {
        $subject = Subjects::find($id);
        if (isset($request->subject)) {
            $subject->subject = $request->subject;
        }
        if (isset($request->level_id)) {
            $subject->level_id = $request->level_id;
        }
        if (isset($request->year_id)) {
            $subject->year_id = $request->year_id;
        }
        if (isset($request->term_id)) {
            $subject->term_id = $request->term_id;
        }
        if ($subject->save()) {
            return redirect()->route('teachers.subjects')->with('updated', 'Updated Successfully ... !');
        }
        return back()->withErrors('Not Updated Please Call Engineer ... !');
    }
    public function delete ($id)
    {
        $subject = Subjects::find($id);
        if ($subject->count() && $subject->delete()) {
            return redirect()->route('teachers.subjects')->with('deleted', 'Removed Successfully ... !');
        }
        return back()->withErrors('Not Removed Please Call Engineer ... !');
    }
}
