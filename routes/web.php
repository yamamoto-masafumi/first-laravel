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
  $hello = 'Hello web.php';
  return view('welcome', compact('hello'));
});

Route::get('/helloworld', 'IndexController@index');
Route::get('/hellomodel', 'IndexController@getHelloData');

Route::get('/form', 'IndexController@showform');
Route::post('/form/submit', 'IndexController@formtest');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// 1/12追加分
Route::get('/dashboard', 'DashboardController@showDashboard');
Route::get('/profile/edit', 'AccountController@showEditForm');
Route::post('/profile/edit/confirm', 'AccountController@profileEditConfirm');
Route::post('/profile/edit/complete', 'AccountController@editProfile');
