<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyProfileController extends Controller
{
    public function get()
    {
        return view('myProfile');
    }

    public function post(Request $request)
    {
//          dd ($request);

        return view('myProfile');
    }
}