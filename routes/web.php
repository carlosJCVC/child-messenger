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

Route::group(['prefix' => 'admin','middleware' => ['role:admin,backend access'], 'as' => 'admin.', 'namespace' => 'Admin'], function () {

    Route::get('dashboard', [
        'as' => 'dashboard',
        'uses' => 'HomeController@index'
    ]);

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
    Route::get('writers/{user}/edit', [
        'as' => 'writers.edit',
        'uses' => 'WriterController@edit',
    ]);
    Route::put('writers/{user}', [
        'as' => 'writers.update',
        'uses' => 'WriterController@update',
    ]);
    Route::patch('writers/{user}', [
        'as' => 'writers.update',
        'uses' => 'WriterController@update',
    ]);
    Route::delete('writers/{user}', [
        'as' => 'writers.destroy',
        'uses' => 'WriterController@destroy',
    ])->middleware('role:administrator,delete writers');

    //-------------Redactores ----------//
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
    Route::get('redactors/{user}/edit', [
        'as' => 'redactors.edit',
        'uses' => 'RedactorController@edit',
    ]);
    Route::put('redactors/{user}', [
        'as' => 'redactors.update',
        'uses' => 'RedactorController@update',
    ]);
    Route::patch('redactors/{user}', [
        'as' => 'redactors.update',
        'uses' => 'RedactorController@update',
    ]);
    Route::delete('redactors/{user}', [
        'as' => 'redactors.destroy',
        'uses' => 'RedactorController@destroy',
    ]);

    Route::get('areas', [
        'as' => 'areas.index',
        'uses' => 'AreaController@index',
    ]);
    Route::get('areas/create', [
        'as' => 'areas.create',
        'uses' => 'AreaController@create',
    ]);
    Route::post('areas/store', [
        'as' => 'areas.store',
        'uses' => 'AreaController@store',
    ]);
    Route::get('areas/{area}/edit', [
        'as' => 'areas.edit',
        'uses' => 'AreaController@edit',
    ]);
    Route::put('areas/{area}', [
        'as' => 'areas.update',
        'uses' => 'AreaController@update',
    ]);
    Route::patch('areas/{area}', [
        'as' => 'areas.update',
        'uses' => 'AreaController@update',
    ]);
    Route::delete('areas/{area}', [
        'as' => 'areas.destroy',
        'uses' => 'AreaController@destroy',
    ]);

    Route::get('roles', [
        'as' => 'roles.index',
        'uses' => 'RoleController@index',
    ]);
    Route::get('roles/create', [
        'as' => 'roles.create',
        'uses' => 'RoleController@create',
    ]);
    Route::post('roles/store', [
        'as' => 'roles.store',
        'uses' => 'RoleController@store',
    ]);
    Route::get('roles/{role}/edit', [
        'as' => 'roles.edit',
        'uses' => 'RoleController@edit',
    ]);
    Route::put('roles/{role}', [
        'as' => 'roles.update',
        'uses' => 'RoleController@update',
    ]);
    Route::patch('roles/{role}', [
        'as' => 'roles.update',
        'uses' => 'RoleController@update',
    ]);
    Route::delete('roles/{role}', [
        'as' => 'roles.destroy',
        'uses' => 'RoleController@destroy',
    ]);

    Route::get('permissions', [
        'as' => 'permissions.index',
        'uses' => 'PermissionController@index',
    ]);
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
