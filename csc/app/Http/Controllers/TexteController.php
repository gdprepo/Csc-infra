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
        
        return redirect()->route('site');
    }
}
