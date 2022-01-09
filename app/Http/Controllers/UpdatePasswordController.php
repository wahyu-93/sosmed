<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class UpdatePasswordController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        return view('layouts.password.edit');
    }

    public function update(Request $request)
    {
        $request->validate([
            'current_password'  => ['required'],
            'password'  => ['required', 'min:8', 'confirmed']
        ]);

        if(Hash::check($request->current_password, auth()->user()->password)){
            Auth::user()->update(['password' => Hash::make($request->password)]);
            return back()->with('message', 'Your Password has been Changed');
        }
        
        throw ValidationException::withMessages([
            'current_password'  => 'Your Current Password does not match with our record'
        ]);
    }
}
