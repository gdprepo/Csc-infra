<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Texte;
use App\Document;
use App\Slider;
use App\Realisation;
use App\Image;


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
        if ($id == 6) {
            session()->flash('textUpd', 'Reference Realisation mis à jour !');
        }
        if ($id == 7) {
            session()->flash('textUpd', 'Notre Showroom mis à jour !');
        }
        if ($id == 8) {
            session()->flash('textUpd', 'Adresse Showroom mis à jour !');
        }
        if ($id == 9) {
            session()->flash('textUpd', 'Horaire Showroom mis à jour !');
        }
        
        return redirect()->route('site');
    }

    public function updRealisation(Request $request, $id)
    {
        $text = Realisation::find($id);

        $text->texte = $request->editor1;
        $text->save();

        if($id == 1) {
            session()->flash('textUpd', 'Salle de bain Realisation mis à jour !');
        }
        if ($id == 2) {
            session()->flash('textUpd', 'Plomberie Realisation mis à jour !');
        }
        if ($id == 3) {
            session()->flash('textUpd', 'Douche Realisation mis à jour !');
        }
        if ($id == 5) {
            session()->flash('textUpd', 'Restauration Realisation mis à jour !');
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
        $realisation = Image::find($id);

        $realisation->delete();

        session()->flash('textUpd', 'Image supprimé !');

        return redirect()->route('site');

    }

    public function realisationadd(Request $request, $id)
    {
        $realisation = Realisation::find($id);

        $res['realisation'] = $realisation;

        return view('dashboard.site.addImg', ['res' => $res]);

    }
    
    public function storeImage(Request $request, $id)
    {
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $file->move('images/gallerie', $file->getClientOriginalName());
            $filename = "images/gallerie/" . $file->getClientOriginalName();
            

            $realisation = Realisation::find($id);
            $image = new Image;

            $image->title = "Image";
            $image->src = $filename;
            $image->save();

            $realisation->images()->attach($image);
        }

        return redirect()->route('site');

    }
}
