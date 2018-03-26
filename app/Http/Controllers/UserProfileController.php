<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Friend;

class UserProfileController extends Controller
{
    /**
     * @param User $user
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create(User $user)
    {

//      look for users's spots
       $spots = DB::table('spots')
            ->select(db::raw('spots.id,spots.title,picture_name,description_post,count(likes.id_user) as likes_count'))
            ->join('photos','spots.id','=','photos.spot_id')
            ->leftjoin('likes','spots.id','=','likes.id_spot')
            ->where('user_id','=',$user->id)
            ->whereNotNull ('priority')
            ->groupBy('spots.id','spots.title','picture_name','description_post')
            ->orderBy('spots.id','desc')
            ->get();
        //dd ($user);

        return view('userProfile', ["user"=>$user, "spots"=>$spots]);
        //dd($user);

    }

    public function friends(User $user2) {
        $user1 = Auth::user();
//        echo  $user1->id . ' - ' . $user2->id;

//  ajouter la vérif que l'amitié n'a pas déjà été créé.

            $friend = new Friend();
            $friend->setAttribute('id_user1',$user1->id);
            $friend->setAttribute('id_user2',$user2->id);
            $friend->setAttribute('status',"accepté");
            $friend->save();
            //dd($friend);
//        }

//      re-chargement de la page
        return redirect()->route('userProfile',[$user2->id]);

    } 

}

