<?php

namespace App\Http\Controllers;

use App\Like;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LikeController extends Controller
{
    public function store (Request $request)
    {
        $likeExist = DB::table('likes')->where([
            ['id_user', Auth::user()->id],
            ['id_spot', $request->input('id_spot')],
        ])->first();
        if ($likeExist === null)
        {
            $like = new Like();
            $like->setAttribute('id_user', Auth::user()->id);
            $like->setAttribute('id_spot', $request->input('id_spot'));
            $like->save();
        } else {
            DB::table('likes')->where([
                ['id_user', Auth::user()->id],
                ['id_spot', $request->input('id_spot')],
            ])->delete();
        }

        return redirect('/spot?id='.$request->input('id_spot'));
    }
}
