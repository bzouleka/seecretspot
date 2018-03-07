<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HobbyController extends Controller
{
    public function create() {

        return view ('hobbies');
    }
    public function store() {

        return redirect()->route ('homePage');
    }

}
