<?php

namespace App\Http\Controllers;

use App\Models\User;
use Faker\Provider\ar_EG\Company;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, User $user)
    {
        return view('layouts.users.profile', compact('user'));
    }
}
