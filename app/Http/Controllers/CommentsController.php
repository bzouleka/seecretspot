<?php

namespace App\Http\Controllers;

use App\Comments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentsController extends Controller
{
    public function store (Request $request) {
        $comments = new Comments();
        $comments->setAttribute('content', $request->input('content'));
        $comments->setAttribute('id_spot', $request->input('id'));
        $comments->setAttribute('id_user', Auth::user()->id);
        $comments->save();

        return redirect()->route('spot');
    }
}
