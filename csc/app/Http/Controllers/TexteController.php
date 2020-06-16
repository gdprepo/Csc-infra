<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Texte;
use App\Document;
use App\Slider;

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

    public function documentdelete(Request $request, $id)
    {
        $document = Document::find($id);

        $document->delete();

        session()->flash('textUpd', 'Document supprimé !');


        return redirect()->route('site');

    }

    public function sliderdelete(Request $request, $id)
    {
        $slider = Slider::find($id);

        $slider->delete();

        session()->flash('textUpd', 'Slider supprimé !');

        return redirect()->route('site');

    }

    public function realisationdelete(Request $request, $id)
    {
        $realisation = Realisation::all()->images()->where('image_id', $id);

        $realisation->delete();

        session()->flash('textUpd', 'Image supprimé !');

        return redirect()->route('site');

    }
}
