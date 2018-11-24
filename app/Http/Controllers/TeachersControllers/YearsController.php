<?php

namespace App\Http\Controllers\TeachersControllers;

use Illuminate\Http\Request;
use App\Http\Requests\YearsRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Years;

class YearsController extends Controller
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
        $years = Years::all();
        return view('teachers.years.index', [
            'years'=>$years
        ]);
    }

    public function new()
    {
        return view('teachers.years.form', [
            'action'=>'new'
        ]);
    }
    public function get($id)
    {
        $year = Years::find($id);
        return view('teachers.years.view', [
            'year'=>$year,
        ]);
    }
    public function edit($id)
    {
        $year = Years::find($id);
        return view('teachers.years.form', [
            'year'=>$year,
            'action'=>'edit',
        ]);
    }
    public function terms($id)
    {
        $year = Years::find($id);
        return $year->terms->toArray();
    }
    public function create(YearsRequest $request, Years $years)
    {
        $years->year = $request->year;
        $years->level_id = $request->level_id;
        if ($years->save()) {
            return redirect()->route('teachers.years')->with('created', 'Created Successfully ... !');
        }
        return back()->withErrors('Not Created Please Call Engineer ... !');
    }

    public function update (YearsRequest $request, $id)
    {
        $year = Years::find($id);
        if (isset($request->year)) {
            $year->year = $request->year;
        }
        if (isset($request->level_id)) {
            $year->level_id = $request->level_id;
        }
        if ($year->save()) {
            return redirect()->route('teachers.years')->with('updated', 'Updated Successfully ... !');
        }
        return back()->withErrors('Not Updated Please Call Engineer ... !');
    }
    public function delete ($id)
    {
        $year = Years::find($id);
        if ($year->count() && $year->delete()) {
            return redirect()->route('teachers.years')->with('deleted', 'Removed Successfully ... !');
        }
        return back()->withErrors('Not Removed Please Call Engineer ... !');
    }
}
