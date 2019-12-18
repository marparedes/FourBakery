@extends('layouts.pasteleria')

@section('contenido')
<main>

  <section id="titulo1">
    <a name="productos">
      <h1>Nuestra Especialidad</h1>
      @role('administrador')
      <a class="botonAgregar" href="/agregarProducto">Agregar Producto</a>
      @endrole
  </section>

  <section>
    <div class="contenedor">
      @foreach ($productos as $producto)
      <article class="elemento">
        <figure>
          <img src="{{ $producto->img }}" />
          <figcaption class="nombreArticulo">{{ $producto->nombre }}</figcaption>
        </figure>
        <div class="precio">
          <p>Precio: ${{$producto['precio']}}</p>
        </div>
        @role('administrador')
        <form class="" action="/eliminarProducto" method="post" style="box-shadow: none">
          @csrf
          <input type="hidden" name="id" value="{{$producto->id}}">
          <input type="submit" name="" value="Borrar">
        </form>
        <a class="BotonModif" href="modificarProducto/id={{$producto['id']}}" style="margin-top: 5px;">Modificar</a>
        @endrole
        <a class="botoncomprar" href="productos/{{ $producto->id }}">Comprar</a>
      </article>
      @endforeach
    </div>
    <div class="" style="padding-left: 80%; margin:20px;">
      {{ $productos->links() }}
    </div>

  </section>
</main>

@endsection