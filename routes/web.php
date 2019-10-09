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

#Route::get('/', function(){
#  return view('principal');
#});

#Auth::routes();

#Route::get('/home', 'HomeController@index')->name('home');

Auth::routes(['verify' => true]);
Route::get('/home', 'HomeController@index')->name('home')->middleware('tipo_de_usuario');

Route::group(['middleware' => 'verifica_email'], function(){

  Route::get('/tipo', function(){return view('tipo_de_usuario');})->name('tipo')->middleware('auth');

  Route::get('/curriculum', 'CandidatoController@cadastrarCurriculo')->name('curriculum');

  Route::get('/adicionarCurriculum', 'CandidatoController@adicionar')->name('adicionar');

  #Empresa

  Route::get('/oportunidade', 'EmpresaController@cadastrarVaga')->name('oportunidade');

  Route::post('/adicionarOportunidade', 'EmpresaController@adicionar')->name('adicionarOportunidade');

});
