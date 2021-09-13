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

    public function updateGroupId (Request $request, $id){
        // dd($request);
        $user = User::find($id); 
        // $user->group_id = $request->group_id;
        
        $user->group_id = 1;
        $user->save();
        
        return redirect()->route('groupsList');
        
    }

    public function removeGroupId (Request $request){
        $user = User::find($request->users);
        $user->group_id = 3;
        $user->save();
        return (User::all());
    }

}
