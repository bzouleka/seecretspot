<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Spot;
use App\Photo;
use App\User;

class MyProfileController extends Controller
{
//  @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
//  @  function create : find user informations + spots informations + friends informations
//  @  parameters : null
//  @  return function view myprofile with parameters spots, user, friends

    public function create()
    {
//      look for users's spots
        $spots = DB::table('spots')
            ->select(db::raw('spots.id_spot,picture_name,description_post,count(likes.id_user) as likes_count'))
            ->join('photos','spots.id_spot','=','photos.spot_id')
            ->leftjoin('likes','spots.id_spot','=','likes.id_spot')
            ->where('user_id','=',1)
            ->whereNotNull ('priority')
            ->groupBy('spots.id_spot','picture_name','description_post')
            ->orderBy('spots.id_spot','desc')
            ->get();

        //dd ($spots);
 
        return view('myProfile',["spots"=>$spots]);
    }

//  @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
//  @ function post : save spot + photo + uploaded picture file in public/spot
//  @ parameters : request
//  @ return function self::create -> 


    public function post(Request $request) {
        if ($request->hasFile('myFile') && $request->file('myFile')->isValid()) {
//          store file in storage/public/spots with a name generate by laravel
            $fullName = $request->myFile->store('public/spots');
            $fileName = 'storage/spots/' . class_basename($fullName);
            // echo '$fullName : ' . $fullName .' / $fileName : ' . $fileName . '<br/>';


//          create in mysql : spot + photos
            $spot = new Spot();
            $spot->setAttribute('description_post',$request->input('commentaire'));
            $spot->setAttribute('user_id',1);
            $spot->save();
            // echo '$spot->id' . $spot->id;

            $photos = new Photo();
            $photos->setAttribute('spot_id', $spot->id);
            $photos->setAttribute('picture_name',$fileName);
            $photos->setAttribute('priority',1);
            $photos->save();
        }

//      re-chargement de la page
        return self::create();

    } 

}
