<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Group;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        
        return view('users', compact('users'));
    }

    public function updateImpostorStatus(Request $request, $id){
        
        $user = User::find($id);     
        $user->update([
            'impostor' => $request->impostor
        ]);
        
        return (User::all());
    }

    public function updateGroupId ($group_id, $id){
        $user = User::find($id); 
        $group = Group::find($group_id);
        // $user->groups()->attach($group_id);
        // $group->users()->attach($id);
        
    }

    






    
}
