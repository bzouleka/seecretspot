<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\User;

class SignUpController extends Controller
{



    public function create()
    {
        return view('signUp');
    }



    public function store (UserRequest $request)
    {
        $user = new User();
        $user->email = $request['email'];
        $user->first_name = $request['first_name'];
        $user->last_name = $request['last_name'];
        $user->user_name = $request['user_name'];
        $user->country = $request['country'];
        $user->password = $request['password'];


        $user->save();

        return redirect()->route('login');
    }
}