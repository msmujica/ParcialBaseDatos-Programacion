<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Middleware\Autenticacion;

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
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/CrearPost', function () {return view('CrearPost');})
    ->middleware(Autenticacion::class);

Route::post('/CrearPost',[PostController::class,"Insertar"])
    ->middleware(Autenticacion::class);

Route::get('/ListarPost',[PostController::class,"Listar"])
    ->middleware(Autenticacion::class);

Route::get('/listarMisPosts',[PostController::class, "listarPostPorUsuario"])
    ->middleware(Autenticacion::class);
Route::get('/modificarPost/{d}', [PostController::class,'CargarFormularioDeModificacion'])
    ->middleware(Autenticacion::class);
Route::get('/posts/{mes}', [PostController::class,"filtrarPorMes"])->name('posts.filtrarPorMes')
    ->middleware(Autenticacion::class);

Route::get('/eliminarPost/{d}', [PostController::class,'Eliminar']);

Route::post('/modificarPost',[PostController::class,"Modificar"]);

Route::post('/register',[UserController::class,"Register"]);

Route::post('/login',[UserController::class,"Login"]);

Route::get('/logout',[UserController::class,"Logout"]);