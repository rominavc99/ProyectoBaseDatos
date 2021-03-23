<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Elementos;

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

Route::get('/', 'App\Http\Controllers\ElementosController@index')->name('elementos.index');

Route::get('agregar', 'App\Http\Controllers\ElementosController@agregar')->name('elementos.agregar');

Route::post('crear', 'App\Http\Controllers\ElementosController@crear')->name('elementos.store');

Route::get('/{id}/editar', 'App\Http\Controllers\ElementosController@editar')->name('elementos.editar');

Route::put('/{elementos}/editar', 'App\Http\Controllers\ElementosController@update')->name('elementos.update');

Route::delete('/{id}', 'App\Http\Controllers\ElementosController@destroy' )->name('elementos.destroy');