<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SpotController extends Controller
{
    public function getNewSpot () {
        return view('spot');
    }
}
