<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Texte;
use App\Document;

class PageController extends Controller
{
    public function prestations()
    {
        $prestations = Texte::find(3);
        $chauffage = Texte::find(4);
        $plomberie = Texte::find(5);
        $document = Document::all();

        $res["prestation"] = $prestations;
        $res["chauffage"] = $chauffage;
        $res["plomberie"] = $plomberie;
        $res["document"] = $document;

        return view('/pages/prestations', ['res' => $res]);
    }

    public function realisations()
    {
        return view('/pages/realisations');
    }

    public function showrooms()
    {
        return view('/pages/showrooms');
    }

    public function contact()
    {
        return view('/pages/contact');
    }
}
