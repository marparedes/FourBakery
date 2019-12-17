@extends('layouts.pasteleria')

@section('contenido')

<main>

   <div class="container">
     <div class="row contenedor">
       @guest
       <p>Debes estar logueado para acceder al perfil.</p>
       @else
     <div class="col-lg-3">
     </div>

       <div class="col-12 col-lg-6">

         <div class="tituloPrincipal">
           <h1>Mi Perfil</h1>
           <h3>Modificar datos</h3>
         </div>

            <form id="formulario" method="post" action='perfil.php'>
              <p id="titulo-form"><b>Información personal</b></p>
              <div class= "user_info">
               <div class="form-group" >
                 <p id="ImagenPerfil"><b>Imagen de perfil:</b><img src="/storage/{{Auth::user()->avatar}}"></p>

                 <label for="nombre">Nombre: </label>
                 <input type="text" class="form-control" name="nombre" value=<?php echo Auth::user()->name ?> >
               </div>
               <div class="form-group">
                 <label for="tel">Teléfono:</label>
                 <input type="tel" class="form-control" name="telefono" value=<?php echo {{ Auth::user()->name ?>}} >
               </div>
               <div class="form-group">
                 <label for="email">Correo-e: </label>
                 <input type="email" class="form-control" name='email' value=<?php echo {{ Auth::user()->email }}?> >
               </div>

               <div class="boton">
                 <button type="text" class="btn btn_login" >Modificar perfil</button>
               </div>

              </div>
            </form>

       </div>

       <div class="col-lg-3">
       </div>

     </div>

   </div>

    </main>

   @endguest
@endsection
