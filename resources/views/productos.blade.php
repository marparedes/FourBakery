@extends('layouts.pasteleria')

@section('contenido')
    <main>

      <section id="titulo1">
          <a name="productos"><h1>Nuestra Especialidad</h1>
      </section>

      <section>
          <div class="contenedor">
              <?php foreach ($productos as $producto) { ?>
              <article class="elemento">
                  <figure>
                      <img src="<?php echo $producto['img']?>"/>
                      <figcaption class="nombreArticulo"><?php echo $producto['nombre']?></figcaption>
                  </figure>
                  <div class="precio">
                    <p>Precio: $ <?=$producto['precio']; ?></p>
                  </div>
                  <a class="botoncomprar" href="productos/<?php echo $producto['id']?>">Comprar</a>
              </article>
              <?php } ?>
          </div>
        </section>
    </main>

@endsection
