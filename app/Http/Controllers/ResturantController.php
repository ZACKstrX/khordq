<?php

namespace App\Http\Controllers;

use App\Models\resturant;
use App\Models\Resturant as ModelsResturant;
use Illuminate\Http\Request;

class ResturantController extends Controller
{

    public function show()
    {
        return view('Resturant');
    }
    public function create(Request $request)
    {
        $request->validate([
            'resturant_name' => 'required',
            'speciality' => 'required',
            'location' => 'required',
            'number' => 'required'
        ]);

        $resturant = resturant::create($request->all());
        

        // [
        //     'resturant_name' => $request->resturant_name,
        //     'speciality' => $request->speciality,
        //     'location' => $request->location,
        //     'number' => $request->number
        // ]
        $resturants = resturant::all();
        
        return redirect()->route('resturant_list');
    }
    public function list(){
        $resturants = Resturant::all(); 

        return view("ResturantList",[
            "data" => $resturants,
            // "zaki" => 'erewwww',
            // "adil"=> 'sensai'

        ]);
    }
}
