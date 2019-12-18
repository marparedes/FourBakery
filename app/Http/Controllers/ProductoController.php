<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use Cart;

class ProductoController extends Controller
{
    public function mostrarProductos(){

      $productos = Producto::paginate(9);

      return view('productos', compact('productos'));
    }

    public function buscarPorId($id){
      $producto= Producto::find($id);
      return view('producto', compact('producto'));
    }

    public function listadoIndex(){
      $productos = Producto::where('id','<=','10')->get();
      return view('index', compact('productos'));
    }

    public function productoId($id){
      $prod = Producto::find($id);
      return view('modificarProducto', compact('prod'));
    }

    public function agregar(Request $req){
      $productoNuevo = new Producto();

      $productoNuevo->nombre = $req['nombre'];
      $productoNuevo->descripcion = $req['descripcion'];
      $productoNuevo->precio = $req['precio'];
      $productoNuevo->stock = $req['stock'];
      $productoNuevo->descuento = 0.00;
      $productoNuevo->categoria_id = '1';

      $imagen = '';
      if(isset($req['ImagenNueva'])) {
        $imagen = $req['ImagenNueva']->store('public');
        $imagen = basename($imagen);

        $productoNuevo->img = "/storage/" . $imagen;
      }
      

      //laravel genera automaticamente created_at y updated_at
      $productoNuevo->save();
      return redirect('/productos');
    }

    public function eliminar(Request $req){
      $id = $req['id'];
      $producto = Producto::find($id);
      $producto->delete();

      return redirect('/productos');
    }

    public function editar(Request $req, $id){
      $idProducto = $id;
      $producto = Producto::find($id);

      $producto->nombre = $req['nombre'];
      $producto->descripcion = $req['descripcion'];
      $producto->precio = $req['precio'];
      $producto->stock = $req['stock'];

      //$imagen = $req->file('ImagenNueva');
      //$archivoImg = $imagen->getClientOriginalName();
      //$producto->img = "/img/" . $archivoImg;

      if(isset($req['ImagenNueva'])) {
        $imagen = $req['ImagenNueva']->store('public');
        $imagen = basename($imagen);

        $producto->img = "/storage/" . $imagen;
      }

      $producto->save();

      return redirect('/productos');
    }

    public function agregarCarrito(Request $form){
      $nombre = $form['nombre'];
      $productoId = $form['id'];
      $precio = (double) $form['precio'];
      $cantidad = (int) $form['cantidad'];
      $imagen = $form['imagen'];

      Cart::add($productoId, $nombre, $cantidad, $precio, 0, ['img' => $imagen]);

      return redirect("/carrito");
    }
}
