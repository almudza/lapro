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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


/**
 * =============================================================================*
 * --------------------- Backend ADMIN Route -----------------------------------*
 * =============================================================================*
 */
Route::group([' namespace' => 'Backend', 'middleware' => 'auth'], function() {

    Route::get('admin', 'AdminController@index')->name('admin.home');
});
