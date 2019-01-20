<?php

namespace App\Http\Controllers\TeachersControllers;

use Illuminate\Http\Request;
use App\Http\Requests\UnitsRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Units;

class UnitsController extends Controller
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
        $units = Units::all();
        return view('teachers.units.index', [
            'units'=>$units
        ]);
    }
    public function get($id)
    {
        $unit = Units::find($id);
        return view('teachers.units.view', [
            'unit'=>$unit,
        ]);
    }
    public function new()
    {
        return view('teachers.units.form', [
            'action'=>'new'
        ]);
    }

    public function edit($id)
    {
        $unit = Units::find($id);
        return view('teachers.units.form', [
            'unit'=>$unit,
            'action'=>'edit',
        ]);
    }

    public function create(UnitsRequest $request, Units $unit)
    {
        $unit->unit = $request->unit;
        $unit->level_id = $request->level_id;
        $unit->year_id = $request->year_id;
        $unit->term_id = $request->term_id;
        $unit->subject_id = $request->subject_id;
        if ($unit->save()) {
            return redirect()->route('teachers.units')->with('created', 'Created Successfully ... !');
        }
        return back()->withErrors('Not Created Please Call Engineer ... !');
    }

    public function update (UnitsRequest $request, $id)
    {
        $unit = Units::find($id);
        if (isset($request->unit)) {
            $unit->unit = $request->unit;
        }
        if (isset($request->level_id)) {
            $unit->level_id = $request->level_id;
        }
        if (isset($request->year_id)) {
            $unit->year_id = $request->year_id;
        }
        if (isset($request->term_id)) {
            $unit->term_id = $request->term_id;
        }
        if (isset($request->subject_id)) {
            $unit->subject_id = $request->subject_id;
        }
        if ($unit->save()) {
            return redirect()->route('teachers.units')->with('updated', 'Updated Successfully ... !');
        }
        return back()->withErrors('Not Updated Please Call Engineer ... !');
    }
    public function delete ($id)
    {
        $unit = Units::find($id);
        if ($unit->count() && $unit->delete()) {
            return redirect()->route('teachers.units')->with('deleted', 'Removed Successfully ... !');
        }
        return back()->withErrors('Not Removed Please Call Engineer ... !');
    }
}
