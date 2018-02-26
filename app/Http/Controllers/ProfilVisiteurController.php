<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilVisiteurController extends Controller
{
    public function create()
    {
        return view('profil-visiteur');
    }
}
