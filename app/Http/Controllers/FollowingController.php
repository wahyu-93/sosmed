<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FollowingController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, User $user, $following)
    {
        $following == 'following' ? $follow = $user->follows : $follow = $user->followers;
        if($following !== 'following' && $following !== 'followers') {
            return redirect()->route('profile');
        };
        
        return view('layouts.users.following', [
            'user'   => $user,
            'follow' => $follow
        ]);
    }

    public function store(Request $request, User $user)
    {
        // if (Auth::user()->hasFollow($user)){
        //     Auth::user()->unfollow($user);
        // }
        // else{
        //     Auth::user()->follow($user);
        // };

        Auth::user()->hasFollow($user) 
            ? Auth::user()->unfollow($user) 
            : Auth::user()->follow($user);

        return back();
    }
}
