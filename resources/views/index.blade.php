<?php
  // $contenido_archivo = file_get_contents('json/productos.json');
  // $productos = json_decode($contenido_archivo, true);
     $productos = []; // Obtener de la base de datos

  if(isset($_GET['eliminar'])) {
    unset($productos[$_GET['producto']]);
    $listaActualizada = json_encode($productos);
    file_put_contents('json/productos.json', $listaActualizada);
  }

?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="/css/font-awesome.css">
  <link href="https://fonts.googleapis.com/css?family=Livvic&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Livvic|Nunito|Raleway&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Courgette|Dancing+Script&amp;display=swap" rel="stylesheet">

  <link rel="stylesheet" href="/css/main.css">
  <title>Home</title>
</head>

<body>

  @include('encabezado')

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
          <a class="BotonElim" href="index.php?producto=<?php //echo $idProducto?>&eliminar=true">Eliminar</a>
          <a class="BotonModif" href="modificarProducto.php?producto=<?php //echo $idProducto?>">Modificar</a>
          <a class="botoncomprar" href="vistaDelProducto.php?producto=<?php //echo $idProducto?>">Comprar</a>
        </article>
        <?php } ?>
      </div>
    </section>
  </main>

  @include('footer')

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>
  <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>

</body>

</html>