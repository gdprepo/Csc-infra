<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

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
        $user = User::find(Auth::id());
        
        return view('home', ['user' => $user]);
    }

    public function edit()
    {
        return view('profile.edit');
    }

    public function clientlist()
    {
        $users = User::where('groupe', '=', 'client')->get();

        return view('dashboard.listClient', ['users' => $users]);
    }

    public function clientshow($id)
    {
        $user = User::find($id);
        return view('dashboard.client', ['user' => $user]);
    }

    public function deconnection()
    {
        Auth::logout();

        return redirect('/login');
    }

}
