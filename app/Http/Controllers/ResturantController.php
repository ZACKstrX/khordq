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
        ]);
    }
    public function delete($id){
        $resturant = Resturant::find($id);
        if ($resturant != null){
            $resturant->delete();
        }
        return $this->list();
    }
    public function update($id){
        $resturant = Resturant::find($id);
        if($resturant != null){
            return view('UpdatingResturant',['updatedinfo'=>$resturant]);
        }     
    }



    public function Edit(Request $request , $id){
        $resturant = resturant::FindOrFail($id);
        if($resturant){
        $request->validate([
            'resturant_name' => 'required',
            'speciality' => 'required',
            'location' => 'required',
            'number' => 'required'
        ]);
        $resturant->update($request->all());
        return $this->list();
        // $resturant = resturant::create($request->all());

     } 

    }
}
