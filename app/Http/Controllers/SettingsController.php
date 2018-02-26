<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;


class SettingsController extends Controller
{
    public function create()
    {
        return view('parametres');
    }


    public function store(Request $request)
    {

       /* $settings = new Settings();*/


    }
}