<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;


class SettingsController extends Controller
{
    public function create()
    {
        return view('settings');
    }


    public function update(Request $request)
    {

       /* $settings = new Settings();*/


    }
}