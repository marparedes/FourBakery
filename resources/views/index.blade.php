<?php $productos = [];?>

@extends('layouts.pasteleria')

@section('contenido')
  <main>

    <div class="imagenPrincipal container">
      <img src="/img/carrusel50.jpg" alt="">
    </div>

    <section id="titulo1">
      <h1 name="productos">Nuestra Especialidad</h1>
      <!--<a class="botonAgregar" href="agregarProducto.php?producto=">Agregar Producto</a> -->
    </section>

    <section>
      <div class="contenedor">

        <?php foreach ($productos as $producto) { ?>
          <article class="elemento">
            <figure>
              <img src="<?=$producto['img']?>" />
              <figcaption class="nombreArticulo"><?php echo $producto['nombre']?></figcaption>
            </figure>
            <a class="BotonElim" href="index.php?producto=<?php echo $producto['id']?>&eliminar=true">Eliminar</a>
            <a class="BotonModif" href="modificarProducto.php?producto=<?php echo $producto['id']?>">Modificar</a>
            <a class="botoncomprar" href="vistaDelProducto.php?producto=<?php echo $producto['id']?>">Comprar</a>
          </article>
        <?php } ?>
      </div>
    </section>
  </main>

@endsection
