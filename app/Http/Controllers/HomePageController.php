<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function getHomePage(){
        return view ('homePage');
    }
}