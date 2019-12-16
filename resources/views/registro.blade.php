@extends('layouts.pasteleria')

@section('contenido')

  <main>
    <div class="container">
      <div class="row contenedor">
        <div class="col-lg-3">

        </div>
        <div class="col-12 col-lg-6">
          <div class="tituloPrincipal">
            <h1>Registrate</h1>
            <h3>¡Únete para hacer tus pedidos!</h3>
          </div>

          <form id="formulario" method='POST' action="{{ route('register') }}" enctype="multipart/form-data">
            @csrf
            <p id="titulo-form"><b>Ingresa tus Datos</b></p>
            <div class="user_info">
              <div class="form-group">
                <label for="name">Nombre</label>
                <input id="name" type="text" class="form-control @error("name") is-invalid @enderror" name="name" value='{{ old('name') }}' focus>
                @error('name')
                <span class="invalid-feedback" role='alert'>
                  <strong>{{$message}}</strong>
                </span>
                @enderror
              </div>
              <div class=form-group>
                <label for="email">Email</label>
                <input id="email" type="email" class="form-control @error("email") is-invalid @enderror" name="email" aria-describedby="emailHelp"
                  value='{{ old('email') }}'>
                  @error('email')
                  <span class="invalid-feedback" role='alert'>
                    <strong>{{$message}}</strong>
                  </span>
                  @enderror
              </div>
              <div class="form-group">
                <label for="password">Contraseña</label>
                <input type="password" class="form-control @error("password") is-invalid @enderror" name="password" id="password" >
                @error('password')
                <span class="invalid-feedback" role='alert'>
                  <strong>{{$message}}</strong>
                </span>
                @enderror
              </div>
             <div class="form-group">
                  <label for="password-confirm">Confirmar contraseña</label>
                  <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
                </div>

                <div class="form-group">
                  <label for="avatar">Subir avatar</label>
                  <input type="file" name="avatar" id="avatar">
                </div>


                <div class="form-group form-check">
                  <input type="checkbox" class="form-check-input" id="terminos" name="terminos" required>
                  <label class="form-check-label" for="terminos">Acepto terminos y condiciones</label>
                </div>

              <div class="boton">
                <button id="enviar" type="submit" class="btn btn_login">Registrarse</button>
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
