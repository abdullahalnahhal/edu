<?php

namespace App\Http\Controllers\TeachersControllers;

use Illuminate\Http\Request;
use App\Http\Requests\TermsRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Terms;

class TermsController extends Controller
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
        $terms = Terms::all();
        return view('teachers.terms.index', [
            'terms'=>$terms
        ]);
    }
    public function get($id)
    {
        $term = Terms::find($id);
        return view('teachers.terms.view', [
            'term'=>$term,
        ]);
    }
    public function new()
    {
        return view('teachers.terms.form', [
            'action'=>'new'
        ]);
    }

    public function edit($id)
    {
        $term = Terms::find($id);
        return view('teachers.terms.form', [
            'term'=>$term,
            'action'=>'edit',
        ]);
    }
    public function subjects($id)
    {
        $term = Terms::find($id);
        return $term->subjects->toArray();
    }

    public function create(TermsRequest $request, Terms $term)
    {
        $term->term = $request->term;
        $term->year_id = $request->year_id;
        if ($term->save()) {
            return redirect()->route('teachers.terms')->with('created', 'Created Successfully ... !');
        }
        return back()->withErrors('Not Created Please Call Engineer ... !');
    }

    public function update (TermsRequest $request, $id)
    {
        $term = Terms::find($id);
        if (isset($request->term)) {
            $term->term = $request->term;
        }
        $term->year_id = $request->year_id;
        if ($term->save()) {
            return redirect()->route('teachers.terms')->with('updated', 'Updated Successfully ... !');
        }
        return back()->withErrors('Not Updated Please Call Engineer ... !');
    }
    public function delete ($id)
    {
        $term = Terms::find($id);
        if ($term->count() && $term->delete()) {
            return redirect()->route('teachers.terms')->with('deleted', 'Removed Successfully ... !');
        }
        return back()->withErrors('Not Removed Please Call Engineer ... !');
    }
}
