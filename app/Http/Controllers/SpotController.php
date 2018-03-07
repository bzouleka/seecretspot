<?php

namespace App\Http\Controllers;

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
        return view('spot');
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
