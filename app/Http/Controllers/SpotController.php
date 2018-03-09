<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\NewSpotValidation;
use App\Photo;
use App\Spot;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\CssSelector\Exception\InternalErrorException;

class SpotController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create(Request $request)
    {
        $spot = DB::table('spots')->where('id', $request->input('id'))->first();
        $spotPic = DB::table('photos')->where('spot_id', $spot->id)->first();
        $comments = DB::table('comments')->where('id_spot', $spot->id)->get();
        $user = DB::table('users')->where('id', $spot->user_id)->first();
        $like = DB::table('likes')->where([
            ['id_user', Auth::user()->id],
            ['id_spot', $spot->id],
        ])->first();
        return view('spot', ['spot' => $spot, 'spotPic' => $spotPic,'comments' => $comments,'user' => $user,'like' => $like]);
    }

    /**
     * @param NewSpotValidation $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws InternalErrorException
     */
    public function store(Request $request)
    {
        return redirect()->route('spot');
    }
}
