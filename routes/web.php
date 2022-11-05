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

Route::get('vistauno', 'App\Http\Controllers\microntrolador@vista1');
Route::get('vistados', 'App\Http\Controllers\microntrolador@vista2');


Route::get('registrarlibro', 'App\Http\Controllers\microntrolador@registralibro')->name('registrarlibro');
Route::post('guardarlibro', 'App\Http\Controllers\microntrolador@guardarlibro')->name('guardarlibro');

Route::get('consultalibros', 'App\Http\Controllers\microntrolador@consultalibros')->name('consultalibros');
Route::get('eliminar/{id}', 'App\Http\Controllers\microntrolador@eliminarLibro')->name('eliminarlibro');

Route::get('muestra/{id}', 'App\Http\Controllers\microntrolador@muestraLibro')->name('muestralibro');
Route::POST('editar/{id}', 'App\Http\Controllers\microntrolador@editalibro')->name('editarlibro');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();