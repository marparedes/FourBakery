@extends('layouts.pasteleria')

@section('contenido')
    <main>
      <div class="nombreDeProducto">
      <h2><?php echo $producto['nombre'];?></h2>
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
@endsection
