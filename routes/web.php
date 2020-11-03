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


Route::get('/cadastros/novo', 'App\Http\Controllers\CadastroController@create');
Route::post('/cadastros/novo/', 'App\Http\Controllers\CadastroController@store')->name('adicionar_usuario');
Route::get('/cadastros/ver/{id}', 'App\Http\Controllers\CadastroController@show');
Route::get('/cadastros/editar/{id}', 'App\Http\Controllers\CadastroController@edit');
Route::post('/cadastros/editar/{id}', 'App\Http\Controllers\CadastroController@update')->name('alterar_usuario');
Route::get('/cadastros/excluir/{id}', 'App\Http\Controllers\CadastroController@delete');
Route::post('/cadastros/excluir/{id}', 'App\Http\Controllers\CadastroController@destroy')->name('excluir_usuario');