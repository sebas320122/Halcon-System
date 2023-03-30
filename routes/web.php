<?php

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//3.3 Creaer ruta hacia usuarios
//4 Implementar crud para usuarios

Route::middleware(['auth'])->group(function () {
    Route::resource('usuarios', 'App\Http\Controllers\UserController');
    Route::get('usuarios', 'App\Http\Controllers\UserController@index')->name('usuarios.index'); 
    Route::post('usuarios', 'App\Http\Controllers\UserController@store')->name('usuarios.store'); 
    Route::post('usuarios/create', 'App\Http\Controllers\UserController@create')->name('usuarios.create'); 
    Route::get('usuarios/{id}', 'App\Http\Controllers\UserController@show')->name('usuarios.show'); 
    Route::patch('usuarios/{id}', 'App\Http\Controllers\UserController@update')->name('usuarios.update'); 
    Route::delete('usuarios/{id}', 'App\Http\Controllers\UserController@destroy')->name('usuarios.destroy'); 
    Route::get('usuarios/{id}/edit', 'App\Http\Controllers\UserController@edit')->name('usuarios.edit');
    //5 Implementar crud para ordenes
    Route::resource('ordenes', 'App\Http\Controllers\OrdenController');
    Route::get('ordenes', 'App\Http\Controllers\OrdenController@index')->name('ordenes.index');    
    Route::post('ordenes', 'App\Http\Controllers\OrdenController@store')->name('ordenes.store'); 
    Route::post('ordenes/create', 'App\Http\Controllers\OrdenController@create')->name('ordenes.create'); 
    Route::get('ordenes/{id}', 'App\Http\Controllers\OrdenController@show')->name('ordenes.show'); 
    Route::patch('ordenes/{id}', 'App\Http\Controllers\OrdenController@update')->name('ordenes.update'); 
    Route::delete('ordenes/{id}', 'App\Http\Controllers\OrdenController@destroy')->name('ordenes.destroy'); 
    Route::get('ordenes/{id}/edit', 'App\Http\Controllers\OrdenController@edit')->name('ordenes.edit'); 
    //6 Implementar apartado de ordenes archivadas
    Route::get('archivadas', 'App\Http\Controllers\OrdenController@index_archivadas')->name('ordenes.archivadas');
    
});

//7 Implementar apartado de clientes
Route::get('inicio', 'App\Http\Controllers\OrdenController@buscar_orden')->name('clientes.inicio');

