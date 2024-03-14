<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Attempting;

class AuthManager extends Controller
{
    function login()
    {
        return view('Login');
    }
    function register()
    {
        return view('Register');
    }
    function loginPost(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended(route('welcome'));
        }
        return redirect(route('login'))->with('error', 'invalid credintials');
    }
}
