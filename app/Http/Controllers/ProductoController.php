<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;

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
      $productos = Producto::where('id','<=','13')->get();
      return view('index', compact('productos'));
    }

    public function productoId($id){
      $prod = Producto::find($id);
      return view('modificarProducto', compact('prod'));
    }
}
