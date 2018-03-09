<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\SettingsRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Contracts\Auth\Authenticatable;


class SettingsController extends Controller

{
    public function create(request $request)
    {

        $user = Auth::User();


        return view('settings', ["user" => $user]);
    }


    public function update(Request $request)
    {

        $user = Auth::user();
        if (!empty($request['last_name'])) {
            //$request['email']=> 'max: 100|required|email|unique:users';
            $user->last_name = $request['last_name'];
        }


        if (!empty($request['first_name'])) {
            $user->first_name = $request['first_name'];
        }
        if (!empty($request['birthday'])) {
            $user->birthday = $request['birthday'];
        }
        if (!empty($request['user_name'])) {
            $user->user_name = $request['user_name'];
        }
        if (!empty($request['email'])) {
            $user->email = $request['email'];
        }
        if (!empty($request['description'])) {
            $user->description = $request['description'];
        }
        if (!empty($request['password'])) {
            $user->password = $request['password'];
        }






            //Change Password

            $user->password = bcrypt($request['password']);



            $user->update();

            return redirect()->route('myProfile')->with('Vos infos ont bien été mises à jour');
        }

}