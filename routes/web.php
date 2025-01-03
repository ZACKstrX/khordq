<?php

use App\Http\Controllers\AuthManager;
use App\Http\Controllers\ClientController;
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

    return view('auth.login');
});

Route::get('/exemple', function (){
    return view('auth.layouts.default');
});

Route::get("/login",[AuthManager::class, "login"]);

Route::get("/test_array",[ClientController::class, "show"]);