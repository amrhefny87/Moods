<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Group;
use App\Models\User;
use Facade\Ignition\Exceptions\ViewException;

class GroupController extends Controller
{
    public function index()
    {
        $groups = Group::all();
        $users = User::all();
        return view('groups')->with('groups',$groups)
        ->with('users',$users)
        ;
        // return ($groups);
        // return view('groups', ['groups'=>$groups, 'users'=>$users]);
    }
    public function store(Request $request)
    {
        $groups = Group::all();
        $users = User::all();
        $group = Group::create([
            'name'=>request()->name
        ]);
        $group->save();
        
        return redirect()->route('groupsList');
        // return view('groups', ['groups'=>$groups, 'users'=>$users]);


        


    }

    public function destroy($id){
        Group::find($id)->delete();
        $groups=Group::all();
        $users = User::all();
        return view('groups', ['groups'=>$groups, 'users'=>$users]);

    }
}
