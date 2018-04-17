<?php

namespace App\Http\Controllers;
use App\Http\Resources\UserCollection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Spot;
use App\Photo;
use App\User;

class HomePageController extends Controller
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
        $spots = DB::table('spots')
            ->select(db::raw('spots.id,spots.title,photos.picture_name,description_post,user_id,user_name,count(likes.id_user) as likes_count'))
            ->join('users','spots.user_id','=','users.id')
            ->join('photos','spots.id','=','photos.spot_id')
            ->leftjoin('likes','spots.id','=','likes.id_spot')
            ->where('user_id','!=',$user->id)
            ->whereNotNull ('priority')
            ->groupBy('spots.id','spots.title','photos.picture_name','description_post','user_id','user_name')
            ->orderBy('spots.id','desc')
            ->get();
        //dd ($spots);

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
        // dd($friends);

        return view ('homePage',["spots"=>$spots,"friends"=>$friends]);

    }
}
