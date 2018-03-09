<?php

namespace App\Http\Controllers;

use App\Comments;
use App\Http\Requests\CommentsRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentsController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store (Request $request)
    {
        $validatedData = $request->validate([
            'content' => 'required|max:255',
        ]);

        $comments = new Comments();
        $comments->setAttribute('content', $request->input('content'));
        $comments->setAttribute('id_spot', $request->input('id'));
        $comments->setAttribute('id_user', Auth::user()->id);
        $comments->save();

        return redirect('/spot?id='.$request->input('id'));
    }
}
