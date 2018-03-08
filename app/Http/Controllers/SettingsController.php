<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class SettingsController extends Controller
{
    public function create()
    {
        return view('settings');
    }


    public function update(Request $request)
    {
        $user = Auth::user();
        if(isset($request['last_name']) && !empty($request['last_name'])) {
            $user->last_name = $request['last_name'];
        }

        if(isset($request['first_name']) && !empty($request['first_name'])) {
            $user->first_name = $request['first_name'];
        }

        if(isset($request['birthday']) && !empty($request['birthday'])) {
            $user->birthday = $request['birthday'];
        }

        if(isset($request['user_name']) && !empty($request['user_name'])) {
            $user->user_name = $request['user_name'];
        }

        if(isset($request['email']) && !empty($request['email'])) {
            $user->email = $request['email'];
        }

        if(isset($request['description']) && !empty($request['description'])) {
            $user->description = $request['description'];
        }


        if(isset($request['password']) && !empty($request['password'])) {
            $user->password = $request['password'];
        }

                $user->update();
        return redirect()->route('myProfile');
            }
        }