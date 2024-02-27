<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TipoAsientoController;
use App\Http\Controllers\Vuelos_AsientosController;
use App\Http\Controllers\VuelosController;

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


Route::get('/inicio', function () {
    return view('inicio');
});

Route::get('/ver',[TipoAsientoController::class,'index'])->name('verTiposAsientos'); 

Route::get('/vuelos',[VuelosController::class,'verVuelos'])->name('verVuelos'); 

Route::get('/nuevoVuelo',[VuelosController::class,'nuevoVuelo'])->name('nuevoVuelo'); 

Route::get('/agregarTipoAsiento',[TipoAsientoController::class,'iragregarTipoAsiento'])->name('agregarTipoAsiento'); 