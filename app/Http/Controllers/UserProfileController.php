<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\DB;
    use Illuminate\Support\Facades\Auth;
    use App\User;

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
                ->join('photos', 'spots.id', '=', 'photos.spot_id')
                ->leftjoin('likes', 'spots.id', '=', 'likes.id_spot')
                ->where('user_id', '=', $user->id)
                ->whereNotNull('priority')
                ->groupBy('spots.id', 'spots.title', 'picture_name', 'description_post')
                ->orderBy('spots.id', 'desc')
                ->get();
            //dd ($user);

            return view('userProfile', ["user" => $user, "spots" => $spots]);
            //dd($user);
        }

        public function addFriends(User $friends){

            //dd($friends);
            return $friends;
        }





    }
