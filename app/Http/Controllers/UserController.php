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
        foreach ($request->user as $requests){
            // dd($request->group);
            $user = User::find($requests); 
            
            $user->group_id = $request->group[0];
            $user->save();

            

        };
        
        
        
        
        return redirect()->route('groupsList');
        
    }

    public function removeGroupId ($id){
        $user = User::find($id);
        // dd($user->group_id);
        $user->group_id = 2;
        // $user->update([
        //     'group_id' => NULL
        // ]);
        $user->save();
        dd($user->group_id);
        return redirect()->route('groupsList');
    }

}
