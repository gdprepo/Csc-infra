<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Texte;
use App\Document;
use App\Slider;

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

    public function clientadd()
    {
        return view('dashboard.createClient');
    }

    public function clientshow($id)
    {
        $user = User::find($id);
        return view('dashboard.client', ['user' => $user]);
    }

    public function clientpassword()
    {
        return view('dashboard.passwordClient');
    }

    public function site()
    {
        $welcome = Texte::find(1);
        $historique = Texte::find(2);
        $prestations = Texte::find(3);
        $chauffage = Texte::find(4);
        $plomberie = Texte::find(5);

        $document = Document::all();
        $slider = Slider::all();

        $res["welcome"] = $welcome;
        $res["historique"]= $historique;
        $res["prestation"] = $prestations;
        $res["chauffage"] = $chauffage;
        $res["plomberie"] = $plomberie;

        $res["document"] = $document;
        $res["slider"] = $slider;
        


        return view('dashboard.site.index', ['res' => $res]);
    }

    public function deconnection()
    {
        Auth::logout();

        return redirect('/login');
    }

}
