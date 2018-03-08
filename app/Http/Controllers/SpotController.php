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
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $spot = DB::table('spots')->where('id', 3)->first();
        $spotPic = DB::table('photos')->where('spot_id', $spot->id)->first();
        $comments = DB::table('comments')->where('id_spot', $spot->id)->get();
        //dd($comments);
        return view('spot', ['spot' => $spot, 'spotPic' => $spotPic,'comments' => $comments]);
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
