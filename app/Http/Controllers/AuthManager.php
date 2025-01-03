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

    function haaa()
    {

        return"haaa";
    }

    function loginPost(Request $request) {}
}
