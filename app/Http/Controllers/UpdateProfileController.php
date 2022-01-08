<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UpdateProfileController extends Controller
{
    public function edit()
    {
        return view('layouts.users.editProfile');
    }

    public function update(Request $request)
    {
       $attr = $request->validate([
            'name'  => ['required', 'min:3', 'max:191', 'string'],
            'email'  => ['required', 'min:3', 'max:191', 'string', 'email'],
            'username'  => ['required', 'alpha_num', 'unique:users,username,' . auth()->id()],
       ]);

       auth()->user()->update($attr);

       return redirect(route('profile', auth()->user()))->with('message', 'Your Profile has been update');
    }
}
