<?php

namespace App\Http\Controllers;

use Illuminate\Http\Client\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthManager extends Controller
{
    function login()
    {

        return view('auth.login');
    }

    function loginPost(Request $request) {
        $request->validate([
            'email' => 'required',
            'password' => 'required|min:8',
        ]);
        $credentials = $request->only(['email', 'password']);
        if(Auth::attempt($credentials)){
            return redirect()->intended(route("home"));
        }
        return redirect("login")
        ->with("error ! ","Invalid Email or Password");
    }
    }