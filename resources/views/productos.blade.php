@extends('layouts.pasteleria')

@section('contenido')
    <main>

      <section id="titulo1">
          <a name="productos"><h1>Nuestra Especialidad</h1>
      </section>

      <section>
          <div class="contenedor">
            @foreach ($productos as $producto)
              <article class="elemento">
                  <figure>
                      <img src="{{ $producto->img }}"/>
                      <figcaption class="nombreArticulo">{{ $producto->nombre }}</figcaption>
                  </figure>
                  <div class="precio">
                    <p>Precio: $ <?=$producto['precio']; ?></p>
                  </div>
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
