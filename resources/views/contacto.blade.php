@extends('layouts.pasteleria')

@section('contenido')
    <main>
      <div class="container">
        <div class="row contenedor">
          <div class="col-lg-3">

          </div>
          <div class="col-12 col-lg-6">
            <div class="tituloPrincipal">
              <h1>Contáctanos</h1>
              <h3>¡Pronto te responderemos!</h3>
            </div>
            <form id="formulario" method='post'>
              <p id="titulo-form"> <b>Envíanos tu Mensaje</b></p>
              <div class= "user_info">
              <div class="form-group" >
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" name="nombre" value="">
              </div>
              <div class="form-group">
                <label for="tel">Teléfono (Opcional)</label>
                <input type="tel" class="form-control" name="telefono" value="">
              </div>
              <div class= form-group>
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" >
              </div>

              <div class="form-group">
              <textarea class="form-control" name="Mensaje" rows="5" cols="74"placeholder="Escriba aquí su mensaje"></textarea>
              </div>
               <div class="boton">
                <button type="submit" class="btn btn_login">Enviar</button>
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
