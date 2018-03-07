<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController extends Controller
{


    public function create(){

        return view ('homePage');

    }
}
