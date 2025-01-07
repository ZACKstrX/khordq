<?php

namespace App\Http\Controllers;

use App\Models\resturant;
use Illuminate\Http\Request;

class ResturantController extends Controller
{
    public function show(){
            return view('resturant');
        }
    public function create(Request $request){
        $request->validate([
            'resturant_name'=>'required',
            'speciality'=>'required',
            'location'=>'required',
            'number'=>'required'
        ]);

        $resturant = resturant::create([
            'resturant_name'=>$request->resturant_name,
            'speciality'=>$request->speciality,
            'location'=>$request->location,
            'number'=>$request->number
        ]);

        return redirect("ThankYou");

    }
}
