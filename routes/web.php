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

    Route::get('redactors', [
        'as' => 'redactors.index',
        'uses' => 'RedactorController@index',
    ]);
    Route::get('redactors/create', [
        'as' => 'redactors.create',
        'uses' => 'RedactorController@create',
    ]);
    Route::post('redactors/store', [
        'as' => 'redactors.store',
        'uses' => 'RedactorController@store',
    ]);
    Route::get('redactors/{redactor}/edit', [
        'as' => 'redactors.edit',
        'uses' => 'RedactorController@edit',
    ]);
    Route::put('redactors/{redactor}', [
        'as' => 'redactors.update',
        'uses' => 'RedactorController@update',
    ]);
    Route::patch('redactors/{redactor}', [
        'as' => 'redactors.update',
        'uses' => 'RedactorController@update',
    ]);
    Route::delete('redactors/{redactor}', [
        'as' => 'redactors.destroy',
        'uses' => 'RedactorController@destroy',
    ]);
});
