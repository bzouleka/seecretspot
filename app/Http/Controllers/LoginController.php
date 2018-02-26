<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;


class LoginController extends Controller
{
    public function create()
    {
        return view('login');
    }


    public function store(UserRequest $request)
    {
        $user = new User();
        $user->username = $request['username'];
        $user->password = $request['password'];


        $user->save();

        if ($user->save()) {
            $data = [
                'user' => [
                    'username' => $request->input('username'),
                    'password' => $request->input('password'),

                ],
            ];
            return view('HomePage', $data);
        }
    }
}




