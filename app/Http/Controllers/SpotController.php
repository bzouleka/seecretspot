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
    public function getNewSpot()
    {
        return view('spot');
    }

    /**
     * @param NewSpotValidation $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws InternalErrorException
     */
    public function storeSpot(NewSpotValidation $request)
    {
        $file = $request->file('spotPicture');
        $filename = md5(uniqid()) . '.jpg';
        if ($file) {
            Storage::disk('local')->put('public/spots/' . $filename, File::get($file));
        }

        $spot = new Spot();
        $spot->setAttribute('description_post', $request->input('description'));
        $spot->setAttribute('title', $request->input('title'));
        $spot->setAttribute('user_id', 1);
        //$request->user()->spots()->save($spot);

        if ($spot->save()) {
            $picture = new Photo();
            $picture->setAttribute('picture_name', $filename);
            if ($spot->photos()->save($picture)) {
                return view('myProfile');
            } else {
                throw new InternalErrorException();
            }
        } else {
            throw new InternalErrorException();
        }

    }
}
