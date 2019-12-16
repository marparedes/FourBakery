@extends('layouts.pasteleria')

@section('contenido')

  <main>
    <!-- traigo con id un producto para editar info -->
        <div class="container">
          <div class="row contenedor">
            <div class="col-lg-3">

            </div>
            <div class="col-12 col-lg-6">
                <div class="tituloPrincipal">
                  <h1>Modificar producto</h1>
                </div>

                <figure>
                  <div class="" style="text-align: center; margin: 20px">
                    <img src="<?php echo $prod['img'];?>"/>
                  </div>
                  <figcaption class="nombreArticulo"><?php echo $prod['nombre'];?></figcaption>
                </figure>

              <form id="formulario" method='post'>
                <div class= "user_info">
                <div class="form-group" >
                  <label for="nombre">Nombre</label>
                  <input type="text" class="form-control" name="nombre" value="<?=$prod['nombre']?>">
                </div>
                <div class="form-group">
                  <label for="precio">Precio</label>
                  <input type="text" class="form-control" name="precio" value="<?=$prod['precio']?>">
                </div>
                <div class="form-group">
                  <label for="ImagenNueva">Cambiar Imagen</label>
                  <input type="file"  id="ImagenNueva" name="ImagenNueva">
                </div>
                <div class="boton">
                  <button type="submit" class="botoncomprar">Modificar</button>
                </div>
              </div>
              </form>
            </div>

            <div class="col-lg-3">

            </div>


          </div>
      </div>
  </main>

@endsection
