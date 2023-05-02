<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;

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
    return view('welcome');
});


//Ruta 1
Route::get('/sincontroller', 
function () {
    return view('sincontroller');
});

//Ruta 2 - con datos
Route::get('/sincontrollercondatos', 
function () {
    return view('sincontrollercondatos',[
        'mensaje'=> 'Este es un mensaje
        desde las rutas', 
        'mensaje2'=>'ya nos queremos ir'
    ]);
});

Route::get('/inicio',
[InicioController::class,'inicio']);

#mostrar productos
Route::get('/products',
function(){
    return view('products/show');
});

#crear productos
Route::get('/products/create',
function(){
    return view('products/create');
});

#actualizar productos
Route::get('/products/update',
function(){
    return view('products/update');
});