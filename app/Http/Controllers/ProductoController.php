<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;

class ProductoController extends Controller
{
    public function mostrarProductos(){

      $productos = Producto::all();

      return view('productos', compact('productos'));
    }

    public function buscarPorId($id){
      $producto= Producto::find($id);
      return view('producto', compact('producto'));
    }
}
