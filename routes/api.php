<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

use App\Alimentos;

	Route::get('alimentos', 'AlimentosController@index');
	Route::get('alimentos/{alimentos}','AlimentosController@show');
	Route::post('alimentos','AlimentosController@store');
	Route::put('alimentos/{alimentos}','AlimentosController@update');
	Route::delete('alimentos/{id}','AlimentosController@delete');
	
	
Use App\Tiporef;

	Route::get('tiporef', 'TiporefController@index');
	Route::get('tiporef/{tiporef}','TiporefController@show');
	Route::post('tiporef','TiporefController@store');
	Route::put('tiporef/{tiporef}','TiporefController@update');
	Route::delete('tiporef/{id}','TiporefController@delete');
	
	
Use App\Refeicoes;

	Route::get('refeicoes', 'RefeicoesController@index');
	Route::get('refeicoes/{refeicoes}','RefeicoesController@show');
	Route::post('refeicoes','RefeicoesController@store');
	Route::put('refeicoes/{refeicoes}','RefeicoesController@update');
	Route::delete('refeicoes/{id}','RefeicoesController@delete');
	
	
Use App\Aliref;

	Route::get('aliref', 'AlirefController@index');
	Route::get('aliref/{aliref}','AlirefController@show');
	Route::post('aliref','AlirefController@store');
	Route::put('aliref/{aliref}','AlirefController@update');
	Route::delete('aliref/{id}','AlirefController@delete');

//Não sei se o user é preciso...	
Use App\User;

	Route::get('user', 'UserController@index');
	Route::get('user/{id}','UserController@show');
	Route::post('user','UserController@store');
	Route::put('user/{id}','UserController@update');
	Route::delete('user/{id}','UserController@delete');
