<?php

namespace App\Http\Controllers;

use Illuminate\Http\Client\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthManager extends Controller
{
    function login()
    {

        return view('auth.login');
    }

    function loginPost(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required|min:8',
        ]);
        $credentials = $request->only(['email', 'password']);
        if (Auth::attempt($credentials)) {
            return redirect()->intended(route("home"));
        }
        return redirect("login")
            ->with("error ! ", "Invalid Email or Password");
    }
    function register(Request $request)
    {

       return view('auth.register');
    }


    function registerPost(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',

        ]);

 

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;

        if ($user->save()) {
            return redirect(route("login"))
                ->with("success", "Registration Successfull");
        }
        return redirect(route("register"))
            ->with("error", "Registration Failed");


            
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',

        ]);


    }
    function registerPostAdil(Request $request){

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',

        ]);
        
        try {
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
            ]);
            return redirect("login")->with("success", "You have been registered successfully");
        } catch (\Exception $e) {
            return redirect()->back()->with("error", $e->getMessage());
        }
    }

}
