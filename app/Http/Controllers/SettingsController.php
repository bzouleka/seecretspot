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
        $user = Auth::user();
        if(isset($request['nom']) && !empty($request['nom'])) {
            $user->nom = $request['nom'];
        }
        $user = Auth::user();
        if(isset($request['prenom']) && !empty($request['prenom'])) {
            $user->nom = $request['prenom'];
        }
        $user = Auth::user();
        if(isset($request['dateNaissance']) && !empty($request['dateNaissance'])) {
            $user->nom = $request['dateNaissance'];
        }
        $user = Auth::user();
        if(isset($request['utilisateur']) && !empty($request['utilisateur'])) {
            $user->nom = $request['utilisateur'];
        }
        $user = Auth::user();
        if(isset($request['mail']) && !empty($request['mail'])) {
            $user->nom = $request['email'];
        }
        $user = Auth::user();
        if(isset($request['description']) && !empty($request['description'])) {
            $user->nom = $request['description'];
        }
        $user = Auth::user();
        if(isset($request['old-pass']) && !empty($request['old-pass'])) {
            $user->nom = $request['old-pas'];
        }
        $user = Auth::user();
        if(isset($request['new-pass-1']) && !empty($request['new-pass-1'])) {
            $user->nom = $request['new-pass-1'];
        }
        $user = Auth::user();
        if (isset($request['new-pass-2']) && !empty($request['new-pass-2'])) {
            $user->nom = $request['new-pass-2'];
        }
                $user->save();
            }
        }