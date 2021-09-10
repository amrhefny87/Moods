<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Group;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        
        return($users);
    }

    public function updateImpostorStatus(Request $request, $id){
        
        $user = User::find($id);     
        $user->update([
            'impostor' => $request->impostor
        ]);
        
        return (User::all());
    }

    public function updateGroupId (Request $request){
        // dd($request);
        $user = User::find($request->users); 
        // $group = Group::find($group_id);
        $user->group_id = $request->group;
        $user->save();
        // $user->groups()->attach($group_id);
        // $group->users()->attach($id);
        
    }

    






    
}
