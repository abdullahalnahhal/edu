<?php

namespace App\Http\Controllers\TeachersControllers;

use Illuminate\Http\Request;
use App\Http\Requests\LevelsRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Levels;

class LevelsController extends Controller
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
        $levels = Levels::all();
        return view('teachers.levels.index', [
            'levels'=>$levels
        ]);
    }
    public function get($id)
    {
        $level = Levels::find($id);
        return view('teachers.levels.view', [
            'level'=>$level,
        ]);
    }
    public function new()
    {
        return view('teachers.levels.form', [
            'action'=>'new'
        ]);
    }

    public function edit($id)
    {
        $level = Levels::find($id);
        return view('teachers.levels.form', [
            'level'=>$level,
            'action'=>'edit',
        ]);
    }

    public function years($id)
    {
        $level = Levels::find($id);
        return $level->years->toArray();
    }

    public function create(LevelsRequest $request, Levels $level)
    {
        $level->level = $request->level;
        if ($level->save()) {
            return redirect()->route('teachers.levels')->with('created', 'Created Successfully ... !');
        }
        return back()->withErrors('Not Created Please Call Engineer ... !');
    }

    public function update (LevelsRequest $request, $id)
    {
        $level = Levels::find($id);
        if (isset($request->level)) {
            $level->level = $request->level;
        }
        if ($level->save()) {
            return redirect()->route('teachers.levels')->with('updated', 'Updated Successfully ... !');
        }
        return back()->withErrors('Not Updated Please Call Engineer ... !');
    }
    public function delete ($id)
    {
        $level = Levels::find($id);
        if ($level->count() && $level->delete()) {
            return redirect()->route('teachers.levels')->with('deleted', 'Removed Successfully ... !');
        }
        return back()->withErrors('Not Removed Please Call Engineer ... !');
    }
}
