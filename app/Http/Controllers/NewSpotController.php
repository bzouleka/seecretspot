<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewSpotValidation;
use App\Photo;
use App\Spot;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\CssSelector\Exception\InternalErrorException;

class NewSpotController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('newSpot');
    }

    /**
     * @param NewSpotValidation $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws InternalErrorException
     */
    public function store(NewSpotValidation $request)
    {
        $file = $request->file('spotPicture');
        $filename = md5(uniqid()) . '.jpg';
        if ($file) {
            Storage::disk('local')->put('public/spots/' .$filename, File::get($file));
        }

        $spot = new Spot();
        $spot->setAttribute('description_post', $request->input('description'));
        $spot->setAttribute('title', $request->input('title'));
        $spot->setAttribute('user_id', 1);

        if ($spot->save()) {
            $picture = new Photo();
            $picture->setAttribute('picture_name', 'storage/spots/' . $filename);
            $picture->setAttribute('priority',1);
            if ($spot->photos()->save($picture)) {
                return redirect()->route('myProfile');
            } else {
                throw new InternalErrorException();
            }
        } else {
            throw new InternalErrorException();
        }

    }
}
