<?php

use Illuminate\Support\Facades\Route;

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

Route::get('vistados', 'App\Http\Controllers\micontrolador@vista2');
Route::get('vistatres', 'App\Http\Controllers\micontrolador@vista3');

Route::get('registrarcarros', 'App\Http\Controllers\micontrolador@registrarcarros')->name('registrarcarros')->middleware('auth');
Route::post('guardarcarros', 'App\Http\Controllers\micontrolador@guardarcarros')->name('guardarcarros')->middleware('auth');

Route::get('consultarcarros', 'App\Http\Controllers\micontrolador@consultarcarros')->name('consultarcarros')->middleware('auth');
Route::get('eliminar/{id}', 'App\Http\Controllers\micontrolador@eliminarcarros')->name('eliminarcarros')->middleware('auth');

Route::get('muestra/{id}', 'App\Http\Controllers\micontrolador@muestraCarro')->name('muestracarros');
Route::POST('editar/{id}', 'App\Http\Controllers\micontrolador@editarcarros')->name('editarcarros');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
