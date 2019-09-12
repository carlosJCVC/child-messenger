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
    Route::get('writers', [
        'as' => 'writers.index',
        'uses' => 'WriterController@index',
    ]);
    Route::get('writers/create', [
        'as' => 'writers.create',
        'uses' => 'WriterController@create',
    ]);
    Route::post('writers/store', [
        'as' => 'writers.store',
        'uses' => 'WriterController@store',
    ]);
    Route::get('writers/{writer}/edit', [
        'as' => 'writers.edit',
        'uses' => 'WriterController@edit',
    ]);
    Route::put('writers/{writer}', [
        'as' => 'writers.update',
        'uses' => 'WriterController@update',
    ]);
    Route::patch('writers/{writer}', [
        'as' => 'writers.update',
        'uses' => 'WriterController@update',
    ]);
    Route::delete('writers/{writer}', [
        'as' => 'writers.destroy',
        'uses' => 'WriterController@destroy',
    ]);
});
