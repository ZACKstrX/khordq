<?php

namespace App\Http\Controllers;

use Illuminate\Http\Client\Response;
use Illuminate\Http\Request;

class AuthManager extends Controller
{
    function login()
    {

        return view('auth.login');
    }

    function loginPost(Request $request) {}
}
