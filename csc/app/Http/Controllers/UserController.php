<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;
use App\User;

class UserController extends Controller
{
    public function index(User $model)
    {
        return view('users.index', ['users' => $model->paginate(15)]);
    }

    public function createclient(Request $request)
    {
        $user = new User;

        $user->prenom = $request->inputprenom;
        $user->nom = $request->inputnom;
        $user->email = $request->inputemail;
        $user->password = Hash::make($request->inputpassword);
        $user->mobile = $request->inputmobile;
        $user->adresse = $request->inputadresse;
        $user->groupe = "client";

        $user->save();

        session()->flash('createClient', 'Profil Client créé !');

        return redirect()->route('home');

    }
}
