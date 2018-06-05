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
Route::group(['prefix' => 'contacts'], function(){
    Route::get('/', 'ContactController@list');
    Route::get('/{id}', 'ContactController@get');
    Route::get('/{id}/threads', 'ThreadController@listIdContact');//Select de hilo
    Route::post('/', 'ContactController@update');
    Route::post('/{id}','ContactController@update');
    Route::delete('/{id}', 'ContactController@destroy');
});

Route::group(['prefix' => 'threads'], function(){
    Route::get('/', 'ThreadController@list');
    Route::get('/{id}', 'ThreadController@get');
    Route::post('/','ThreadController@update');
    Route::post('/{id}','ThreadController@update');
    Route::delete('/{id}', 'ThreadController@destroy');
});


Route::group(['prefix' => 'companies'], function(){
    Route::get('/', 'CompanyController@list');
    Route::get('/{id}', 'CompanyController@get');
    Route::get('/{id}/contacts', 'ContactController@listIdCompany');//Rellena tabla dependiendo la empresa seleccionada
    Route::post('/','CompanyController@update');
    Route::post('/{id}','CompanyController@update');
    Route::delete('/{id}', 'CompanyController@destroy');
});

Route::group(['prefix' => 'actions'], function(){
    Route::get('/', 'ActionController@list');
    Route::get('/types', 'TypeController@list');//Rellena comobobox
    Route::get('/{id}', 'ActionController@get');
    Route::get('/{id}/types', 'TypeController@get');//Rellena combobox con el id que tenía en la accion
    Route::get('/{id}/threads', 'ActionController@listIdThread');//Rellenar tabla Actions dependiendo del Thread
    Route::post('/','ActionController@update');
    Route::post('/{id}','ActionController@update');
    Route::delete('/{id}', 'ActionController@destroy');
});

