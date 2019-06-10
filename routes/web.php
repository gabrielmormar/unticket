<?php

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Cartao de Credito
Route::get('/complementar-dados', 'CartaoCreditoController@index');
Route::post('cadastrar-cartao', 'CartaoCreditoController@store');

// Evento
Route::get('/eventos', 'EventoController@index');
Route::get('eventos/cadastro', 'EventoController@create');
Route::post('eventos/store', 'EventoController@store');
Route::get('/eventos/meus-eventos', 'EventoController@show');
Route::get('/eventos/edit/{id}', 'EventoController@edit');
Route::post('eventos/update/{id}', 'EventoController@update');

// Apresentacao
Route::get('/apresentacao/{id}', 'ApresentacaoController@index');
Route::get('/apresentacao/ingresso/{id}', 'IngressoController@index');
Route::get('/ingressos/meus-ingressos', 'IngressoController@show');
Route::post('/ingresso/comprar/{id}', 'IngressoController@store');
