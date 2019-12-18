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

Route::get('/index','ProductoController@listadoIndex');

Route::get('/faq', function() {
    return view('/faq');
});

Route::get('/contacto', function() {
    return view('/contacto');
});

/* Rutas del perfil */
Route::get('/registro', 'Auth\RegisterController@showRegistrationForm');

Route::get('/perfil', function() {
    return view('perfil');
})->middleware('auth');

Route::get('/perfil/editar', function() {
    return view('editarPerfil');
});

Route::post('/perfil/editar', 'PerfilController@actualizarPerfil');

/* Rutas de productos */
Route::get('/productos', 'ProductoController@mostrarProductos');

Route::get('/productos/{id}', 'ProductoController@buscarPorId');

Route::get('/modificarProducto/id={id}', 'ProductoController@productoId');

Route::post('/modificarProducto/id={id}', 'ProductoController@editar');

Route::get('/agregarProducto', function(){
  return view('agregarProducto');
})->middleware('auth');

Route::post('/agregarProducto', 'ProductoController@agregar');

Route::post('/eliminarProducto','ProductoController@eliminar');

/* Rutas del carrito */
Route::get('/carrito', function() {
    return view('/vista-carrito');
});

Route::post('/agregar-al-carrito','ProductoController@agregarCarrito');

Route::get('/eliminar/{id}', function($id) {
    Cart::remove($id);
    return redirect('/carrito');
});

Route::get('/vaciar', function() {
    Cart::destroy();
    return redirect('/carrito');
});

Route::get('/compra', function() {
    Cart::destroy();
    return view('/compra');
})->middleware('auth');


Auth::routes();

