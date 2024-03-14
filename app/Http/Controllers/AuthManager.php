<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
