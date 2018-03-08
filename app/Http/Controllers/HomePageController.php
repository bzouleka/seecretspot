<?php

namespace App\Http\Controllers;
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
                
//      look for users's spots
        $spots = DB::table('spots')
            ->select(db::raw('spots.id,spots.title,photos.picture_name,description_post,user_id,user_name,count(likes.id_user) as likes_count'))
            ->join('users','spots.user_id','=','users.id')
            ->join('photos','spots.id','=','photos.spot_id')
            ->leftjoin('likes','spots.id','=','likes.id_spot')
            ->whereNotNull ('priority')
            ->groupBy('spots.id','spots.title','photos.picture_name','description_post','user_id','user_name')
            ->orderBy('spots.id','desc')
            ->get();

        //dd ($spots);
 
        return view ('homePage',["spots"=>$spots]);

    }
}
