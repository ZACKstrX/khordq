<?php

namespace App\Http\Controllers;

use App\Models\Fournisseur;
use Illuminate\Http\Request;

class FournisseurController extends Controller
{
    public function ShowPageFournisseur()
    {
        return view('fournisseur.addFournisseur');
    }


    public function create(Request $request)
    {
         $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'phone_number' => 'required',
            'age' => 'required'
        ]);
         $fournisseur = Fournisseur::create([
            'first_name' => $request->firstname,
            'last_name' => $request->lastname,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'age' => $request->age
        ]);
    }
}
