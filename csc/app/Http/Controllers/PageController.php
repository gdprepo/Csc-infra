<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function prestations()
    {
        return view('/pages/prestations');
    }

    public function realisations()
    {
        return view('/pages/realisations');
    }
}
