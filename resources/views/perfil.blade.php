@extends('layouts.pasteleria')

@section('contenido')

<main>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
   <div class="container">
     <div class="row contenedor">
     @guest
     <p>Debes estar logeado para acceder al perfil.</p>
     @else
     <form action="miPerfil.php" enctype="multipart/form-data" method="post">
     <label for="imagen">Imagen:</label>
     <input id="imagenPerfil" name="imagen" size="30" type="file" />

     <input name="submit" type="submit" value="Guardar" />
     </form>
       <div class="col-12 col-lg-8">


         <div class="tituloPrincipal">
           <h1>Mi Perfil</h1>
           <h3>¡Mi cuenta!</h3>
         </div>

             <form id="formulario" method="post" action='miPerfil.php'>
           <div class="form-group">
             <p id="titulo-form"><b>Información Personal</b></p>
             <div class= "user_info">
               <div class="form-group" >
                 <label for="nombre">Nombre</label>
                 <input type="text" class="form-control" name="nombre" value=<?php echo Auth::user()->name ?> >
               </div>
               <div class="form-group">
                 <label for="tel">Telefono</label>
                 <input type="tel" class="form-control" name="telefono" value={{ auth::user()->name }} >
               </div>
               <div class="form-group">
                 <label for="email">Email</label>
                 <input type="email" class="form-control" name='email' value={{ auth::user()->email }} >
               </div>


               <div class="boton">
                 <button type="text" class="btn btn_login" >Editar Perfil</button>



               </div>

               </div>

             </div>
         </form>


       </div>
       <div class="col-lg-3">

       </div>
     </div>


   </div>
   @endguest

 </main>

@endsection
