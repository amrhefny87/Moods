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
        foreach ($users as $user){
            $user->impostor = 0;
            $user->save();
        };
        foreach ($groups as $group){
            $user = collect($users)->where('group_id', $group->id)->all();
            $imp = array_rand($user);
            $impostor = $user[$imp];
            $this->updateImpostorStatus($impostor->id);
            $group->impostor_id = $impostor->id;
            $group->ready=1;
            $group->save();
        };
        return redirect()->route('groupsList');

    }

    public function redirectUsers(){
        $user = auth()->user();
        $group = Group::find($user->group_id);
        
        if ($group === null || !$group->ready==1){
            
            return view('waiting')->with('waitMsg','El juego no esta listo, repite otra vez en un rato');
            }else{
            return redirect()->route('characters');
            
    }
    }

    public function getCharacter(){
        $groups = Group::all();
        $usersAll = User::all();
        foreach ($groups as $group){
            $data = file_get_contents ('../characters.json');
            $json_file = json_decode($data, true);
            $characters=$json_file;
            $users = collect(User::all())->where('group_id', $group->id)->all();
            foreach ($users as $user){

                $arrayId= array_rand($characters);
                $character = $characters[$arrayId];
                $user->character_id = $character["id"];
                $user->save();
                unset($characters[$arrayId]);
            };
        }
        
        return ($usersAll);
        
    }

    public function startGame(){
        $this->chooseTheImpostor ();
        $this->getCharacter();
        return redirect()->route('groupsList');
        
    }

    public function characters(){
        $user = auth()->user();
        $data = file_get_contents ('../characters.json');
        $json_file = json_decode($data, true);
        $characters=$json_file;
        
        
        $character= collect($characters)->where('id', $user->character_id)->first();
        
        if ($character){
            return view('characters')->with('character',$character)->with('user',$user);
        }else{
            return view('waiting')->with('waitMsg','El juego no esta listo, repite otra vez en un rato');
        }
    
        
    }

    public function impostor(){
        $user = auth()->user();
        $group = Group::find($user->group_id);
        $impostor = User::find($group->impostor_id);
        $data = file_get_contents ('../characters.json');
        $json_file = json_decode($data, true);
        $characters=$json_file;

        
        $character= collect($characters)->where('id', $impostor->character_id)->first();
        return view('impostor')->with('character',$character)->with('impostor',$impostor);;
    }

    public function endGame(){
        $user = User::all();
        $groups = Group::all();
        foreach ($groups as $groups){
            $groups->delete();
        }
        foreach ($user as $user){
            if($user->is_admin === 0){
                $user->delete();
            }
            
        }
        return redirect()->route('welcome');

    }
}
