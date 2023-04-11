<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DueñosController;
use App\Http\Controllers\PropiedadesController;
use App\Http\Controllers\RastreoController;

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

// dueños 
Route::controller(DueñosController::class)->group(function(){
    Route::get('/usuarios','index')->name('usuarios.ver');
    Route::post('/usuariosinsertar', 'store')->name('usuarios.insertar');
    Route::post('/usuariosactualizar', 'update')->name('usuactualizar');
    Route::delete('/usuariosdestroy/{id_usu}', 'destroy')->name('usuarios.destroy');
    Route::post('/usuariosfiltro','filtro_name')->name('usufiltroname');
});

// propiedades
Route::controller(PropiedadesController::class)->group(function(){
    Route::get('/propiedades','index')->name('propiedades.ver');
    Route::post('/propiedadesinsertar', 'store')->name('propiedades.insertar');
    Route::post('/propiedadesactualizar', 'update')->name('propiedadesactualizar');
    Route::delete('/propiedadesdestroy/{idProperty}', 'destroy')->name('propiedades.destroy');
    Route::post('/propiedadesfiltro','filtro_name')->name('propiedadesfiltroname');
});

// rastreo propiedades
Route::controller(RastreoController::class)->group(function(){
    Route::get('/rastreo','index')->name('rastreo.ver');
    Route::post('/rastreoinsertar', 'store')->name('rastreo.insertar');
    Route::post('/rastreoactualizar', 'update')->name('rastreoactualizar');
    Route::delete('/rastreodestroy/{idProperty}', 'destroy')->name('rastreo.destroy');
    Route::post('/rastreofiltro','filtro_name')->name('rastreofiltroname');
});
