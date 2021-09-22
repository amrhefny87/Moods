<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Group;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        if(Auth::user()->is_admin)
        {
            return redirect()->to('/admin');
        }
        return view('waiting');
    }
    public function intro(){
        return view('intro');
    }

    public function authCharacter(){
        $user = auth()->user();
        $data = file_get_contents ('../characters.json');
        $json_file = json_decode($data, true);
        $characters=$json_file;

        
        $character= collect($characters)->where('id', $user->character_id)->first();
        return ($character);
    }
    public function mission1(){
        $user = auth()->user();
        $character=$this->authCharacter();
        // dd($character);
        return view('mission1')->with('character',$character);
    }


    public function mission2(){
        $user = auth()->user();
        $character=$this->authCharacter();
        // dd($character);
        return view('mission2')->with('character',$character)->with('user',$user);
    }
    public function mission3(){
        $user = auth()->user();
        $character=$this->authCharacter();
        // dd($character);
        return view('mission3')->with('character',$character);
    }
    public function mission4(){
        $user = auth()->user();
        $character=$this->authCharacter();
        // dd($character);
        return view('mission4')->with('character',$character);
    }
    public function mission5(){
        $user = auth()->user();
        $character=$this->authCharacter();
        // dd($character);
        return view('mission5')->with('character',$character);
    }

    public function missionImp(){
        $user = auth()->user();
        $group = Group::find($user->group_id);
        $users = collect(User::all())->where('group_id', $group->id)->all();
        $character=$this->authCharacter();
        
        return view('missionImp')->with('users',$users)->with('character',$character);
    }


    public function map(){
        return view('map');
    }

    

    public function impostor(){
        return view('impostor');
    }


    public function create()
    {
        
    }
}
