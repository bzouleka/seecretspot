<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function create(){

        return view ('login');

    }

    public function store()
    {

        $Result = auth()->attempt([
            'user_name' => request('user_name'),
            'password' => request('password'),
        ]);

        if($Result) {
            //return view('homePage');
            return redirect()->route('homePage');
        }
        return back()->withErrors([
            'user_name' => "Vos identifiants sont incorrects."
        ]);
    }

        public function logout()
        {
            auth()->logout();
            return redirect()->route('login');
        }

    }
