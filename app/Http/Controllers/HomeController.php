<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Grupo;
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
    public function mission(){
        return view('mission');
    }

    public function create()
    {
        $user = Auth::user();
        if($user->role === 'admin') {
        return view('map');
        }
        
    }
}
