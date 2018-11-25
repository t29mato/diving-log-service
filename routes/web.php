<?php

use Illuminate\Auth\Middleware\Authenticate;

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

Route::prefix('/log')->group(function (){
    Route::get('/', 'LogController@index');
});

Route::prefix('/area')->group(function() {
    Route::get('/', 'AreaController@index');
    Route::get('add', 'AreaController@add')->middleware('auth');
    Route::post('add', 'AreaController@create');
    Route::get('edit', 'AreaController@edit')->middleware('auth');
    Route::post('edit', 'AreaController@update');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
