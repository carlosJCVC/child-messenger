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

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin'], function () {
	Route::get('suscriptors', [
		'as' => 'suscriptors.index',
		'uses' => 'SuscriptorController@index'
	]);
	Route::get('suscriptors/create', [
        'as' => 'suscriptors.create',
        'uses' => 'SuscriptorController@create',
    ]);
    Route::post('suscriptors/store', [
        'as' => 'suscriptors.store',
        'uses' => 'SuscriptorController@store',
    ]);
    Route::get('suscriptors/{suscriptor}/edit', [
        'as' => 'suscriptors.edit',
        'uses' => 'SuscriptorController@edit',
    ]);
    Route::put('suscriptors/{suscriptor}', [
        'as' => 'suscriptors.update',
        'uses' => 'SuscriptorController@update',
    ]);
    Route::patch('suscriptors/{suscriptor}', [
        'as' => 'suscriptors.update',
        'uses' => 'SuscriptorController@update',
    ]);
    Route::delete('suscriptors/{suscriptor}', [
        'as' => 'suscriptors.destroy',
        'uses' => 'SuscriptorController@destroy',
    ]);
    
   
//Route::post('/suscriptor/crear','SuscriptorController@store');
});