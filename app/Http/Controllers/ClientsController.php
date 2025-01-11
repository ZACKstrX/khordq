<?php

namespace App\Http\Controllers;

use App\Models\Clients;
use Illuminate\Http\Request;

class ClientsController extends Controller
{

    public function ShowSignup(){
        return view('Clients');

    }

    public function create(Request $request){
        $request->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'class'=>'required',
            'birthday' => 'nullable|string'
        ]);
        $Clients = Clients::create([
            'first_name'=>$request->first_name,
            'last_name'=>$request->last_name,
            'birthday'=>$request->birthday,
            'class'=>$request->class,
            'email'=>$request->email
        ]);

    }
}
