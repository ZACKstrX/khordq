<?php

namespace App\Http\Controllers;

use App\Models\Clients;
use Illuminate\Http\Request;

class ClientsController extends Controller
{

    public function ShowSignup()
    {
        return view('Clients');
    }

    public function create(Request $request)
    {
        $request->validate([
            'first_name' => 'required|min:4',
            'last_name' => 'required|min:4',
            'email' => 'required|email',
            'class' => 'required',
            'birthday' => 'required|nullable|string',
            'sexe' => 'required'
        ]);
        $Clients = Clients::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'birthday' => $request->birthday,
            'class' => $request->class,
            'email' => $request->email,
            'sexe' => $request->sexe
        ]);

        return $this->ShowTable();
    }

    public function ShowTable()
    {
        $Clients = Clients::all();

        return view('ClientTable', ['cls' => $Clients]);
    }
    
    public function delete($id)
    {
        $Client = Clients::find($id);
        if ($Client != null) {

            $Client->delete();
        }
        
       return $this->ShowTable();
    }

    public function update($id)
    {
        $Client = Clients::find($id);
        if ($Client != null) {
            return view('UpdateClient',['updatedinfo' => $Client]);
        }
    }

    public function updating( Request $request,$id){
        $Client = Clients::findOrFail($id);
        if ($Client){
            
            $request->validate([
                'first_name' => 'required|min:4',
                'last_name' => 'required|min:4',
                'email' => 'required|email',
                'class' => 'required',
                'birthday' => 'required|string',
                'sexe' => 'required'
            ]);
                $Client->first_name = $request->first_name;
                $Client->last_name = $request->last_name;
                $Client->birthday = $request->birthday;
                $Client->class = $request->class;
                $Client->email = $request->email;
                $Client->sexe = $request->sexe;
                $Client->save();
                $Client = Clients::all();
                return view('ClientTable', ['cls' => $Client]);
        }

    } 
}
