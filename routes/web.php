<?php

use App\Http\Controllers\AuthManager;
use App\Http\Controllers\FournisseurController;
use App\Models\Fournisseur;
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

route::get("/fournisseur",[FournisseurController::class , "ShowPageFournisseur"]);

route::post("fournisseur",[FournisseurController::class, "create"])
->name("fournisseur.create");







