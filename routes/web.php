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

//Route::get('/index', 'HomeController@index');

Route::get('/faq', function() {
    return view('/faq');
});

Route::get('/contacto', function() {
    return view('/contacto');
});


Route::get('/perfil', function() {
    return view('/perfil');
});

Route::get('/perfil/editar',['as'=> 'perfil.editar', 'uses' => 'PerfilController@edit']);
Route::patch('/perfil/actualizar',['as'=> 'perfil.actualizar', 'uses' => 'PerfilController@update']);


Route::get('/index','ProductoController@listadoIndex');

Route::get('/registro', 'Auth\RegisterController@showRegistrationForm');

//Route::post('/registro', 'Auth\RegisterController@agregarUsuario');

//Route::get('/login', 'Auth\LoginController@showLoginForm');

Route::get('/productos', 'ProductoController@mostrarProductos');

Route::get('/productos/{id}', 'ProductoController@buscarPorId');

Route::get('/modificarProducto/id={id}', 'ProductoController@productoId');

Route::get('/agregarProducto', function(){
  return view('agregarProducto');
});

Route::post('/agregarProducto', 'ProductoController@agregar');

Route::post('/eliminarProducto','ProductoController@eliminar');

Route::post('/modificarProducto/id={id}', 'ProductoController@editar');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
