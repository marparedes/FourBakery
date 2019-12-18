@extends('layouts.pasteleria')

@section('estilos/scripts')
<link href="{{ asset('css/vista-del-producto.css') }}" rel="stylesheet">
@endsection

@section('contenido')
<main>
  <div class="nombreDeProducto">
    <h2>Mi Perfil</h2>
  </div>
  <div class="contenedor1">

    <div class="img">
      @if(Auth::check() && Auth::user()->avatar != "")
      <img src="/storage/{{Auth::user()->avatar}}">
      @elseif(Auth::check() && Auth::user()->avatar == "")
      <img src="/img/imagenPorDefecto.png">
      @endif
    </div>
    <div class="alineacionTexto">
      <h3><strong>Nombre de usuario:</strong> {{Auth::user()->name}}</h3>
      <h4><strong>Correo-e:</strong> {{Auth::user()->email}}</h3>

        <a href="{{url('perfil/editar')}}" class="btn btn_login">Modificar perfil</a>

    </div>
  </div>

</main>
@endsection