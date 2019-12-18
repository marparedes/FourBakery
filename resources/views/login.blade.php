@extends('layouts.pasteleria')

@section('estilos/scripts')
<link href="{{ asset('css/login_registro.css') }}" rel="stylesheet">
<!--<script src="{{ asset('js/validacionRegistro.js') }}"> </script>-->
@endsection

@section('contenido')

<main>
  <div class="container">
    <div class="row contenedor">
      <div class="col-lg-3">

      </div>
      <div class="col-12 col-lg-6">
        <div class="tituloPrincipal">
          <h1>Inicia Sesión</h1>
          <h3>¡Mi cuenta!</h3>
        </div>
        <form id="formulario" method="post" action='{{ route('login') }}'>
          @csrf
          <p id="titulo-form"><b>Ingresa tus Datos</b></p>
          <div class="user_info">
            <div class="form-group">
              <label for="email">Email</label>
              <input id="email" type="email" class="form-control @error(" email") is-invalid @enderror" name='email'>
              @error('email')
              <span class="invalid-feedback" role='alert'>
                <strong>{{$message}}</strong>
              </span>
              @enderror
            </div>
            <div class="form-group">
              <label for="password">Contraseña</label>
              <input type="password" class="form-control @error(" password") is-invalid @enderror" name='password'>
              @error('password')
              <span class="invalid-feedback" role='alert'>
                <strong>{{$message}}</strong>
              </span>
              @enderror

              <small><a href="#" id="pass">¿Olvidaste tu contraseña?</a> </small>
            </div>
            <div class="form-group form-check">
              <input type="checkbox" name="mantenerme" class="form-check-input" id="mantenerme" value="1">
              <label class="form-check-label" for="mantenerme">Recuerdame</label>
            </div>
            <div class="boton">
              <button id="enviar" type="submit" class="btn btn_login">Iniciar Sesión</button>
            </div>
            <div class="registrarse">
              <small id="pass">¿No tenés cuenta? <a href="{{url("/registro")}}">Registrate</a> </small>
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