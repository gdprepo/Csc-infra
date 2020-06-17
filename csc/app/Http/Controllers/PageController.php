<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Texte;
use App\Document;
use App\Realisation;
use App\Image;

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
        $realisation = Realisation::find(1);
        $plomberie = Realisation::find(2);
        $douche = Realisation::find(3);
        $douche_apres = Realisation::find(4);
        $restauration = Realisation::find(5);
        $restauration_apres = Realisation::find(6);

        $references = Texte::find(6);

        $res["salleDeBain"] = $realisation;
        $res["plomberie"] = $plomberie;
        $res["douche"] = $douche;
        $res["douche_apres"] = $douche_apres;
        $res["restauration"] = $restauration;
        $res["restauration_apres"] = $restauration_apres;
        $res["references"] = $references;


        return view('/pages/realisations', ['res' => $res]);
    }

    public function showrooms()
    {
        $showroom = Texte::find(7);
        $adresse = Texte::find(8);
        $horaire = Texte::find(9);
        $map = Realisation::find(7);
        $galerie = Realisation::find(8);

        $res["showroom"] = $showroom;
        $res["adresse"] = $adresse;
        $res["horaire"] = $horaire;
        $res["map"] = $map;
        $res["galerie"] = $galerie;

        return view('/pages/showrooms', ['res' => $res]);
    }

    public function contact()
    {
        return view('/pages/contact');
    }
}
