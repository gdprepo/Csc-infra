<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Texte;

class TexteController extends Controller
{
    public function welcome(Request $request, $id)
    {
        $text = Texte::find($id);

        $text->texte = $request->editor1;
        $text->save();

        if($id == 1) {
            session()->flash('textUpd', 'Welcome mis à jour !');
        }
        if ($id == 2) {
            session()->flash('textUpd', 'Historique mis à jour !');
        }
        if ($id == 3) {
            session()->flash('textUpd', 'Prestations mis à jour !');
        }
        if ($id == 4) {
            session()->flash('textUpd', 'Chauffage mis à jour !');
        }
        if ($id == 5) {
            session()->flash('textUpd', 'Plomberie mis à jour !');
        }
        
        return redirect()->route('site');
    }
}
