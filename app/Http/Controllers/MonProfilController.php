<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MonProfilController extends Controller
{
    public function create()
    {
        return view('mon-profil');
    }
}
