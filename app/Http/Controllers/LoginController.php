<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;


class LoginController extends Controller
{
    public function create()
    {
        return view('inscription');
    }



    public function store (Request $request)
    {
        /*$user = new User();
        $user->email = $request['email'];
        $user->first_name = $request['first_name'];
        $user->last_name = $request['last_name'];
        $user->user_name = $request['user_name'];
        $user->country = $request['country'];
        $user->password = $request['password'];
        $user->confirm_password = $request['confirm_password'];

        $user->save();*/

        return redirect()->route('index');
    }
}