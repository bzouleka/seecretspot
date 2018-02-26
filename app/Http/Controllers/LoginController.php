<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function signIn()
    {

        return view (login);
    }


    public function postIdentifiant(UserRequest $request)
    {
        $user = new User();
        $user->username = $request['username'];
        $user->password = $request['password'];

        $user->save();

        if ($user->save()){
            $data = [
                'user' => [
                    'username' => $request->input('username'),
                    'password' => $request->input('password'),

                ],
            ];
            return view('page-principale', $data);
        }
        else{
            throw new InternalErrorException();
        }
    }

}
