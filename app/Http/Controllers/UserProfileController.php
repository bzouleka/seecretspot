<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Spot;
use App\Photo;

class UserProfileController extends Controller
{
    public function create(User $user)
    {
dd($user);
        return view('userProfile');
    }
}
