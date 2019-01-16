<?php

namespace App\Http\Controllers\TeachersControllers;

use Illuminate\Http\Request;
use App\Http\Requests\GroupsRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Groups;

class GroupsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index()
    {
        $groups = Groups::all();
        return view('teachers.groups.index', [
            'groups'=>$groups
        ]);
    }
    public function get($id)
    {
        $group = Groups::find($id);
        return view('teachers.groups.view', [
            'group'=>$group,
        ]);
    }
    public function new()
    {
        return view('teachers.groups.form', [
            'action'=>'new'
        ]);
    }

    public function edit($id)
    {
        $group = Groups::find($id);
        return view('teachers.groups.form', [
            'group'=>$group,
            'action'=>'edit',
        ]);
    }

    public function create(GroupsRequest $request, Groups $group)
    {
        $group->group = $request->group;
        $group->level_id = $request->level_id;
        $group->year_id = $request->year_id;
        $group->term_id = $request->term_id;
        if ($group->save()) {
            return redirect()->route('teachers.groups')->with('created', 'Created Successfully ... !');
        }
        return back()->withErrors('Not Created Please Call Engineer ... !');
    }

    public function update (GroupsRequest $request, $id)
    {
        $group = Groups::find($id);
        if (isset($request->group)) {
            $group->group = $request->group;
        }
        if (isset($request->level_id)) {
            $group->level_id = $request->level_id;
        }
        if (isset($request->year_id)) {
            $group->year_id = $request->year_id;
        }
        if (isset($request->term_id)) {
            $group->term_id = $request->term_id;
        }
        if ($group->save()) {
            return redirect()->route('teachers.groups')->with('updated', 'Updated Successfully ... !');
        }
        return back()->withErrors('Not Updated Please Call Engineer ... !');
    }
    public function delete ($id)
    {
        $group = Groups::find($id);
        if ($group->count() && $group->delete()) {
            return redirect()->route('teachers.groups')->with('deleted', 'Removed Successfully ... !');
        }
        return back()->withErrors('Not Removed Please Call Engineer ... !');
    }
}
