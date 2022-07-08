<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProvedorController;
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

/* 
    GET - Request a resource
    POST - Create a new resource
    PUT - Update a resource
    PATCH - Modify a resource
    DELETE - Delete a resource
    OPTIONS - Ask the server which verbs are allowed
*/


Route::resource('provedor', ProvedorController::class);
Route::resource('productos', ProductoController::class);

//  GET
Route::get('/usuarios', [UsuarioController::class, 'getUsers']);
Route::get('/usuarios/{id}', [UsuarioController::class, 'getUser'])->where('id', '[0-9]+');
//otra forma de validar que sea un número
//  ->whereNumber('id');

//para alfabeto
//    ->where ('name', '[A-Za-z]+');
//    ->whereAlpha('name')

//para comparar mas de un campo
//  ->where([
//      'id' => '[0-9]+',
//      'name', '[A-Za-z]+'
//  ])
    // ->whereNumber('id')
    // ->whereAlpha('name')

//  POST
Route::post('/usuarios/create', [UsuarioController::class, 'createUser']);
Route::post('/usuarios', [UsuarioController::class, 'setUser']);

//  PUT OR PATCH
Route::get('/usuarios/update/{id}', [UsuarioController::class, 'editUser']);
Route::patch('/usuarios/{id}', [UsuarioController::class, 'updateUser']);

//DELETE
Route::delete('/usuarios/{id}', [UsuarioController::class, 'deleteUser']);


Route::get('/', function () {
    dd(config('services.mailgun.domain'));
    return view('welcome');
});