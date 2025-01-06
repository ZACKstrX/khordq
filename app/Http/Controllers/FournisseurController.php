<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FournisseurController extends Controller
{
    public function ShowPageFournisseur(){
        return view('fournisseur.addFournisseur');
    }
}
