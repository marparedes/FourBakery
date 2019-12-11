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
    return redirect('/index');
});

Route::get('/index', 'HomeController@index');

Route::get('/faq', function() {
    return view('/faq');
});

Route::get('/contacto', function() {
    return view('/contacto');
});

Route::get('/register', 'Auth\RegisterController@showRegistrationForm');

Route::get('/login', 'Auth\LoginController@showLoginForm');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');


