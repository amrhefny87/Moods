<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Group;

class GroupController extends Controller
{
    public function index()
    {
        $groups = Group::all();
        return view('groups', ['groups'=>$groups]);
    }
    public function store(Request $request)
    {
        $group = Group::create([
            'name'=>request()->name
        ]);
        $group->save();
        


    }

    public function destroy($id){
        Group::find($id)->delete();
        $groups=Group::all();
        return view('groups', ['groups'=>$groups]);

    }
}
