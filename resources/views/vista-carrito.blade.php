@extends('layouts.pasteleria')

@section('estilos/scripts')
<link href="{{ asset('css/carrito.css') }}" rel="stylesheet">
@endsection

@section('contenido')
<main>
  <div class="titulo">
    <h1>Mi carrito</h1>
  </div>

  <div class="container contenedorProd">
    @foreach(Cart::content() as $row)
    <div class="contenedorColor producto">
      <div class="img">
        <img src="{{$row->options->img}}" alt="">
      </div>
      <div class="nombre">
        <p>Nombre del producto</p>
        <h3>{{$row->name}}</h3>
      </div>
      <div class="precio">
        <p>Precio del producto</p>
        <h3>${{$row->price}}</h3>
      </div>
      <div class="cantidad">
        <p>Cantidad</p>
        <h3>{{$row->qty}}</h3>
      </div>

    </div>
    <div class="total">
      <p><a href="{{ url('eliminar/' . $row->rowId) }}" class="">Eliminar</a></p>
    </div>
    @endforeach


    <div class="total">
      <h3>TOTAL</h2>
        <p>${{Cart::subtotal()}}</p>
    </div>

    <div class="boton">
      <a id="sinDecoracion" href="{{url("vaciar")}}"><button type="submit" class="botoncomprar">Vaciar
          carrito</button></a><br>
      @if(Auth::check() && Cart::content()->count() != 0 )
      <a id="sinDecoracion" href="{{url("compra")}}"><button type="submit" class="botoncomprar">Realizar
          Compra</button></a>
      @elseif(Cart::content()->count() == 0)
      <button type="submit" class="botoncomprar">Realizar Compra</button>
      @else
      <a id="sinDecoracion" href="{{url("login")}}"><button type="submit" class="botoncomprar">Realizar
          Compra</button></a>
      <p>Debes estar logueado para realizar compra</p>
      @endif
    </div>
</main>
@endsection