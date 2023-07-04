<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('inicio');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/login',  function(){  
    return view('login');

});

Route::post('/register',[UserController::class,"Register"]);
Route::post('/login',[UserController::class,"Login"]);
Route::get('/logout',[UserController::class,"Logout"]);