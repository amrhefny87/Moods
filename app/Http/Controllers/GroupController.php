<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Group;
use App\Models\User;
use App\Http\Controllers\UserController;
use Facade\Ignition\Exceptions\ViewException;

class GroupController extends Controller
{
    public function index()
    {
        $groups = Group::all();
        $users = User::all();
        return view('groups')->with('groups',$groups)
        ->with('users',$users);
    
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
    }

    public function destroy($id){
        $users = User::all();
        $user = collect($users)->where('group_id', $id)->all();
        foreach ($user as $user) {
            $user->group_id = null;
            $user->save();
        }
        Group::find($id)->delete();
        return redirect()->route('groupsList');

    }
}
