@extends('layouts.pasteleria')

@section('contenido')
<main>

  <div class="imagenPrincipal container">
    <img src="/img/carrusel50.jpg" alt="">
  </div>

  <section id="titulo1">
    <h1 name="productos">Nuestra Especialidad</h1>
    @role('administrador')
    <a class="botonAgregar" href="/agregarProducto">Agregar Producto</a>
    @endrole
  </section>

  <section>
    <div class="contenedor">

      @foreach($productos as $producto)
      <article class="elemento">
        <figure>
          <img src="{{$producto['img']}}" />
          <figcaption class="nombreArticulo">{{$producto['nombre']}}</figcaption>
        </figure>
        @role('administrador')
        <form class="" action="/eliminarProducto" method="post" style="box-shadow: none">
          @csrf
          <input type="hidden" name="id" value="{{$producto->id}}">
          <input type="submit" name="" value="Borrar">
        </form>
        <a class="BotonModif" href="modificarProducto/id={{$producto['id']}}" style="margin-top: 5px;">Modificar</a>
        @endrole
        <a class="botoncomprar" href="productos/{{$producto['id']}}">Comprar</a>
      </article>
      @endforeach

    </div>

    <div class="" style="padding: 0;text-align: center; margin: 40px; padding-bottom: 20px">
      <a href="/productos" style="text-decoration: none;">
        <button type="button" class="btn btn-light btn-lg" style=" color: gray"> Ver Más </button>
      </a>
    </div>
  </section>
</main>

@endsection