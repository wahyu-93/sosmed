<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class FollowingController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, User $user, $following)
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
}
