<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProvedorController;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\PerfilController;

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
//Route::middleware(['cors'])->group(function () {
    //////////////////////////USUARIOS/////////////////////////////
    Route::get('/usuarios', [UsuarioController::class, 'getUsers']);
    Route::get('/usuarios/{id}', [UsuarioController::class, 'getUser'])->where('id', '[0-9]+');
    //  POST
    Route::post('/usuarios/create', [UsuarioController::class, 'createUser']);
    //Route::post('/usuarios', [UsuarioController::class, 'setUser']);
    //  PUT OR PATCH
    Route::post('/usuarios/editar/{id}', [UsuarioController::class, 'editUser']);
    //Route::patch('/usuarios/{id}', [UsuarioController::class, 'updateUser']);
    //DELETE
    Route::delete('/usuarios/{id}', [UsuarioController::class, 'deleteUser']);
    
    //////////////////////////MARCAS///////////////////////////
    // GET
    Route::get('/marcas', [MarcaController::class, 'getMarcas']);
    Route::get('/marcas/{id}', [MarcaController::class, 'getMarca']);
    // POST
    Route::post('/marcas/create', [MarcaController::class, 'createMarca']);
    // UPDATE
    Route::post('/marcas/editar/{id}', [MarcaController::class, 'editMarca']);
    //Route::patch('/usuarios/{id}', [UsuarioController::class, 'updateUser']);
    //DELETE
    Route::delete('/marcas/{id}', [MarcaController::class, 'deleteMarca']);

    ///////////////////////////PERFILES///////////////////////////
    // GET
    Route::get('/perfiles', [PerfilController::class, 'getPerfiles']);
    Route::get('/perfiles/{id}', [PerfilController::class, 'getPerfil']);
    // POST
    Route::post('/perfiles/create', [PerfilController::class, 'createPerfil']);
    // UPDATE
    Route::post('/perfiles/editar/{id}', [PerfilController::class, 'editPerfil']);
   // DELETE
   Route::delete('/perfiles/{id}', [PerfilController::class, 'deletePerfil']); 
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


Route::get('/', function () {
    dd(config('services.mailgun.domain'));
    return view('welcome');
});
