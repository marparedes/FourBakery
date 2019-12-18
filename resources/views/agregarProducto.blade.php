@extends('layouts.pasteleria')

@section('contenido')

  <main>
        <div class="container">
          <div class="row contenedor">
            <div class="col-lg-3">
            </div>

            <div class="col-12 col-lg-6">
              <div class="tituloPrincipal">
                <h1>Agrega un Producto</h1>
              </div>

              <form id="formulario" action="/agregarProducto" method='post'>
                {{csrf_field()}}
                <div class= "user_info">
                <div class="form-group" >
                  <label for="nombre">Nombre</label>
                  <input type="text" class="form-control" name="nombre" value="">
                </div>
                <div class="form-group" >
                  <label for="descripcion">Descripción</label>
                  <input type="text" class="form-control" name="descripcion" value="">
                </div>
                <div class="form-group">
                  <label for="precio">Precio</label>
                  <input type="number" class="form-control" name="precio" value="">
                </div>
                <div class="form-group">
                  <label for="stock">Stock</label>
                  <input type="text" class="form-control" name="stock" value="">
                </div>
                <div class="form-group">
                  <label for="ImagenNueva">Imagen</label>
                  <input type="file"  id="ImagenNueva" name="ImagenNueva">
                </div>
                <div class="boton">
                  <button type="submit" class="botoncomprar">Agregar</button>
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
