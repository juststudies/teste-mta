<?php

use Illuminate\Support\Facades\Route;

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

    

Route::group(['prefix' => 'users'], function () {
    Route::get('/', 'UserController@index')->name('index');
    Route::get('create', 'UserController@create')->name('create');
    Route::get('edit/{id}', 'UserController@edit')->name('edit');
    Route::post('store', 'UserController@store')->name('store');
    
    Route::put('edit/{id}', 'UserController@update')->name('update');
    Route::delete('delete/{id}', 'UserController@destroy')->name('destroy');
});
