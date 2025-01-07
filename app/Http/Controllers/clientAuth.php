<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class clientAuth extends Controller
{
    public function ShowClient()
    {
        return view("auth.Client.client");
    }


}