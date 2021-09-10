<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Group;
use App\Models\User;

class GroupController extends Controller
{
    public function index()
    {
        $groups = Group::all();
        $users = User::all();
        return view('groups')->with('groups',$groups)->with('users',$users);
    }
    public function store(Request $request)
    {
        $group = Group::create([
            'name'=>request()->name
        ]);
        $group->save();
        $groups = Group::all();
        return view('groups', ['groups'=>$groups]);

        


    }

    public function destroy($id){
        Group::find($id)->delete();
        $groups=Group::all();
        return view('groups', ['groups'=>$groups]);

    }
}
