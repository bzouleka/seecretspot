<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class SettingsController extends Controller
{
    public function create()
    {
        return view('settings');
    }


    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request)
    {
        $user = Auth::user();
        if (isset($request['last_name']) && !empty($request['last_name'])) {
            $user->last_name = $request['last_name'];
        }

        if (isset($request['first_name']) && !empty($request['first_name'])) {
            $user->first_name = $request['first_name'];
        }

        if (isset($request['birthday']) && !empty($request['birthday'])) {
            $user->birthday = $request['birthday'];
        }

        if (isset($request['user_name']) && !empty($request['user_name'])) {
            $user->user_name = $request['user_name'];
        }

        if (isset($request['email']) && !empty($request['email'])) {
            $user->email = $request['email'];
        }

        if (isset($request['description']) && !empty($request['description'])) {
            $user->description = $request['description'];
        }

        if (isset($request->old_pass) && isset($request->password) && isset($request->password_confirmation)) {

            if (!(Hash::check($request->get('old_pass'), Auth::user()->password))) {    // pour vérifier si les passwords match
                return redirect()->back()->with("erreur", "Votre mot de passe actuel ne correspond pas au mot de passe que vous avez fourni.");
            }
            if (strcmp($request->get('old_pass'), $request->get('password_confirmation')) == 0) {
                //Current password and new password are same
                return redirect()->back()->with("erreur", "Le nouveau mot de passe ne peut pas être le même que votre mot de passe actuel.");
            }
            $request->validate([
                'old_pass' => 'required',
                'password' => 'required|string|confirmed',
            ]);


            //if(isset($request['password']) && !empty($request['password'])) {
            //     $user->password = $request['password'];
            // }
            $user->password = bcrypt($request->get('password'));
            $user->update();
            return redirect()->route('myProfile');
        }
    }
}