<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="css/font-awesome.css">
    <link href="https://fonts.googleapis.com/css?family=Livvic&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Livvic|Nunito|Raleway&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Courgette|Dancing+Script&amp;display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/css/main.css">
    <title></title>
  </head>
  <body>
    <h1>Nuestros productos</h1>
    
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
                    <p>Precio: <?=$producto['precio']; ?></p>
                  </div>
                  <a class="botoncomprar" href="vistaDelProducto.php?producto=<?php echo $producto['id']?>">Comprar</a>
              </article>
              <?php } ?>
          </div>
          </section>
    </main>


  </body>
</html>
