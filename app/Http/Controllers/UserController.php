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

    public function updateImpostorStatus($id){
        
        $user = User::find($id);     
        $user->update([
            'impostor' => 1,
        ]);
        
        return ($user);
    }

    public function updateGroupId (Request $request){
        foreach ($request->user as $requests){
            $user = User::find($requests); 
            $user->group_id = $request->group[0];
            $user->save();
        };
        
        
        
        
        return redirect()->route('groupsList');
        
    }

    public function removeGroupId ($id){
        $user = User::find($id);
        

        $user->group_id = null;
        $user->save();
        
        return redirect()->route('groupsList');

        
    }

    public function chooseTheImpostor (){
        $groups = Group::all();
        $users = User::all();
        foreach ($groups as $group){
            $user = collect($users)->where('group_id', $group->id)->all();
            
            $imp = array_rand($user);
            $impostor = $user[$imp];
            $this->updateImpostorStatus($impostor->id);
            $group->impostor_id = $impostor->id;
            $group->save();
        };
        return redirect()->route('groupsList');

    }

}
