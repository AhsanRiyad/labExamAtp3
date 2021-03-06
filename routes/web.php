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

Route::get('/reg', 'authController@reg')->name('authController.reg');

Route::post('/reg', 'authController@regStore')->name('authController.reg');

Route::get('/login', 'authController@login')->name('authController.login');

Route::post('/login', 'authController@loginCheck')->name('authController.login');

Route::get('/list', 'authController@list')->name('authController.list');

Route::get('/edit/{id}', 'authController@edit')->name('authController.edit');


Route::get('/delete/{id}', 'authController@delete')->name('authController.delete');






