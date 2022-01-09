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
    return view('auth.login');
});

Auth::routes();
//Route::resource('task', 'TaskController', [
 //   'except' => ['index', 'show','store']
//]);
 Route::resource('task', 'TaskController');
Route::post('task/destroy/{id}', 'TaskController@destroy');
Route::get('/home', 'HomeController@index')->name('home');
