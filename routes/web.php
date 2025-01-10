<?php

use App\Http\Controllers\AuthManager;
use App\Http\Controllers\clientAuth;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\FournisseurController;
use App\Http\Controllers\ResturantController;
use App\Models\Fournisseur;
use App\Models\resturant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name("home");

Route::get("/login",[AuthManager::class, "login"])
->name("login");

Route::post("login",[AuthManager::class, "loginPost"])
->name("login.Post");

Route::get("/register",[AuthManager::class, "register"])
->name("register");

Route::post("register",[AuthManager::class, "registerPost"])
->name("register.Post");




route::get("fournisseur",[FournisseurController::class , "ShowPageFournisseur"]);

route::post("fournisseur",[FournisseurController::class, "create"])->name("fournisseur.create");

route::get("resturant",[ResturantController::class, "show"]);
route::post("resturant",[ResturantController::class, "create"]);


// route::post("resturant",function (Request $request){
//     $request->validate([
//         'resturant_name'=>'required',
//         'speciality'=>'required',
//         'location'=>'required',
//         'number'=>'required'
//     ]);

//     $resturant = resturant::create([
//         'resturant_name'=>$request->resturant_name,
//         'speciality'=>$request->speciality,
//         'location'=>$request->location,
//         'number'=>$request->number
//     ]);

//     return redirect("ThankYou");

// })->name("resturant.Post");



route::get("ThankYou",function(){
    return view('ThankYouView');
});

route::get("ListResturant",[ResturantController::class ,"list"]);

route::get("FournisseurList",[FournisseurController::class,"showlist"]);

route::get("client",[ClientsController::class,"ShowSignIn"]);