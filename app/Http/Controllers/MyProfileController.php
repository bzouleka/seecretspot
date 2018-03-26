<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
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
//    public function create(App\User $user)
{
        $user = Auth::user();
                
//      look for users's spots
        $spots = Spot::where('user_id','=',$user->id)->withCount('likes')->get()->sortByDesc('id');
//        $spots = Spot::where('user_id','=',$user->id)->get();

/*$spots = DB::table('spots')
            ->select(db::raw('spots.id,spots.title,picture_name,description_post,count(likes.id_user) as likes_count'))
            ->join('photos','spots.id','=','photos.spot_id')
            ->leftjoin('likes','spots.id','=','likes.id_spot')
            ->where('user_id','=',$user->id)
            ->whereNotNull ('priority')
            ->groupBy('spots.id','spots.title','picture_name','description_post')
            ->orderBy('spots.id','desc')
            ->get();

        //dd ($spots);
*/

//      look fr friends
        $friends1 = DB::table('friends')
            ->select(db::raw('id_user2 as id,status,user_name,picture_name'))
            ->join('users','id_user2','=','users.id')
            ->where('id_user1','=',$user->id)
            ->where('status','=','accepté');

                   
        $friends = DB::table('friends')
            ->select(db::raw('id_user1 as id,status,user_name,picture_name'))
            ->join('users','id_user1','=','users.id')
            ->where('id_user2','=',$user->id)
            ->where('status','=','accepté')
            ->union($friends1)
            ->get();

        //dd($friends);
 
        return view('myProfile',["user"=>$user, "spots"=>$spots, "friends"=>$friends]);
    }

//  @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
//  @ function post : save spot + photo + uploaded picture file in public/spot
//  @ parameters : request
//  @ return function self::create -> 


    public function post(Request $request) {
        $user = Auth::user();

        $userBDD = User::find($user->id);
        if ($request->hasFile('myFile') && $request->file('myFile')->isValid()) {
            $fileName = $request->myFile->store('public/users');
            $fullName = 'storage/users/' . class_basename($fileName);
            $userBDD->setAttribute('picture_name',$fullName);
        }

        $userBDD->setAttribute('description',$request->input('description'));
        $userBDD->save();

/*  code pour créer un nouveau spot avec photo
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
*/
//      re-chargement de la page
        return redirect()->route('myProfile');

    } 

}
