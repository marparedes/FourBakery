@extends('layouts.pasteleria')

@section('estilos/scripts')
<link href="{{ asset('css/login_registro.css') }}" rel="stylesheet">

@endsection

@section('contenido')

<main>
  <div class="container">
    <div class="row contenedor">
      <div class="col-lg-3">

      </div>
      <div class="col-12 col-lg-6">
        <div class="tituloPrincipal">
          <h1>Modificar Perfil</h1>
        </div>

        <form id="formulario" method='POST' action="{{url('perfil/editar')}}" enctype="multipart/form-data">
          @csrf
          <div class="user_info">
            <div class="form-group">
              <label for="name">Nombre</label>
              <input id="name" type="text" class="form-control @error(" name") is-invalid @enderror" name="name"
                value="{{Auth::user()->name}}" focus>
              @error('name')
              <span class="invalid-feedback" role='alert'>
                <strong>{{$message}}</strong>
              </span>
              @enderror
            </div>
            <div class=form-group>
              <label for="email">Email</label>
              <input id="email" type="email" class="form-control @error(" email") is-invalid @enderror" name="email"
                value="{{Auth::user()->email}}" aria-describedby="emailHelp" value='{{ old('email') }}'>
              @error('email')
              <span class="invalid-feedback" role='alert'>
                <strong>{{$message}}</strong>
              </span>
              @enderror
            </div>

            <div class="form-group">
              <label for="avatar">Subir avatar</label>
              <input type="file" name="avatar" id="avatar">
            </div>

            <div class="boton">
              <button id="enviar" type="submit" class="btn btn_login">Guardar cambios</button>
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