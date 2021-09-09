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

    public function updateGroupID(Request $request, $id){
        $user = User::find($id);
                
        $user->update([
            'group_id' => $request->id
        ]);
        
        return (User::all());


        
    }






    
}
