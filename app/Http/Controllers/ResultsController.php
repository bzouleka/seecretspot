<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResultsController extends Controller
{
    public function create()
    {
        return view('results');
    }
}
