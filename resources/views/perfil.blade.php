@extends('layouts.pasteleria')

@section('contenido')

<main>

   <div class="container">
     <div class="row contenedor">
       @guest
       <p>Debes estar logueado para acceder al perfil.</p>
       @else
        <div class="col-lg-12 margin-tb">
          <h2>Mi perfil</h2>
        </div>

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Nombre: </strong> {{Auth::user()->name}}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Correo-e: </strong> {{Auth::user()->email}}
                        </div>
                    </div>
                </div>

                <form id="formulario" method="post" action='{{ route('perfil.editar') }}'>
                  @csrf
                    <div class="boton">
                        <button type="submit" class="btn btn_login" >Modificar perfil</button>
                    </div>
                </form>
              </div>
            </div>
            @endguest
            @endsection
