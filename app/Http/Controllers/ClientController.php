<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Client $client)
    {
            // give me array of numbre  
            $array = [1,2,5,1,3];
            $array = [
                "banana",
                "apple",
                "orange",
                "grape"
        ];

        
        $array = [
            "banana" => 1,
            "apple" => 2,
            "orange" => 3,
            "grape" => 4
            ];



        // create arry  has list client


     
     
        return view('AfficheListClient', [ "client" => $clients]);

 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Client $client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Client $client)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $client)
    {
        //
    }
}
