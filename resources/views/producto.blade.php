<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Producto</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/vista-del-producto.css">
    <link rel="stylesheet" href="/css/main.css">
    <title></title>
  </head>
  <body>
    <h1>Vista del producto</h1>

    <main>
      <div class="nombreDeProducto">
      <h2><?php echo $producto['nombre']?></h2>
      </div>
      <div class="contenedor1">

          <div class="img">
            <img src="<?php echo $producto['img']?>"/>
          </div>
          <div class="alineacionTexto">
              <h3>$<?php echo $producto['precio']?></h3>

              <h3>Cantidad</h3>
              <input min=0 max=50 class="botoncantidad" type="number"> <br><br>
              <a class="botoncomprar" href="vistaDelProducto.php?producto=<?=$producto['id']?>&agregar=true"><i class="fas fa-cart-arrow-down"></i> Agregar al carrito</a>

          </div>
      </div>

    </main>
  </body>
</html>
