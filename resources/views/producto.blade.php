@extends('layouts.pasteleria')

@section('estilos/scripts')
<link href="{{ asset('css/vista-del-producto.css') }}" rel="stylesheet">
@endsection

@section('contenido')
<main>
  <div class="nombreDeProducto">
    <h2>{{$producto['nombre']}}</h2>
  </div>
  <div class="contenedor1">

    <div class="img">
      <img src="{{$producto['img']}}" />
    </div>
    <div class="alineacionTexto">
      <h3>${{$producto['precio']}}</h3>

      <form method="post" action="/agregar-al-carrito">
        @csrf
        <input type="hidden" name="nombre" value="{{$producto['nombre']}}">
        <input type="hidden" name="id" value="{{$producto['id']}}">
        <input type="hidden" name="precio" value="{{$producto['precio']}}">
        <input type="hidden" name="imagen" value="{{$producto['img']}}">
        <div class="form-group">
          <label for="cantidad">Cantidad</label>
          <input min=1 max=50 class="form-control botoncantidad" type="number" name="cantidad" required>
        </div>
        <button type="submit" class="btn btn_login botoncomprar"><i class="fas fa-cart-arrow-down"></i> Agregar al
          carrito</button>
      </form>

    </div>
  </div>

</main>
@endsection