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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Importar arquivo da B3
Route::get('/cotacoes',"CotacoesController@index")->name('cotacoes');
Route::get('/cotacoes_importar',"CotacoesController@importar")->name('cotacoes_importar');
Route::post('/cotacoes_store',"CotacoesController@store")->name('cotacoes_store');

//Transações
Route::get('/transacao_comprar', 'TransacoesController@comprar')->name('transacao_comprar'); 
Route::get('/transacao_comprar_renda_variavel', 'TransacoesController@comprarRendaVariavel')->name('transacao_comprar_renda_variavel'); 

