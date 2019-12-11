<?php

  //include_once('funciones/autenticador.php');
  $email='';
  $errorEmail='';
  $errorPassword='';

  if($_POST){
    $email = $_POST['email'];
    $password = $_POST['password'];

    if($email == ''){
      $errorEmail = 'Ingresa tu email';
    } else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
      $errorEmail = 'El email es inválido';
    }

    if($password == ''){
      $errorPassword = 'Ingresa tu password';
    }

    //verificar que el usuario existe
    if(empty($errorEmail) && empty($errorPassword)){

      $archivo = file_get_contents('json/usuarios.json');

      $usuarios = json_decode($archivo, true);

      foreach ($usuarios as $usuario) {
        if($usuario['email'] == $email && password_verify($password, $usuario['password'])){
          //entra a este if si se encontró al usuario y se inicia sesion
          $_SESSION['nombre'] = $usuario['nombre'];
          $_SESSION['email'] = $usuario['email'];
          $_SESSION['telefono'] = $usuario['telefono'];
          $_SESSION['avatar'] = $usuario['avatar'];
          $_SESSION['admin'] = $usuario['admin'];
          $_SESSION['id'] = $usuario['id'];


          if(isset($_POST['mantenerme'])){
              //creo cookie de duracion de login -- 30 dias
              setcookie('email', $_SSESION['email'], time() + 60*60*24*30);
              setcookie('nombre', $_SESSION['nombre'], time() + 60*60*24*30);
              setcookie('telefono', $_SESSION['telefono'], time() + 60*60*24*30);
              setcookie('avatar', $_SESSION['avatar'], time() + 60*60*24*30);
              setcookie('admin', $_SESSION['admin'], time() + 60*60*24*30);
              setcookie('id', $_SESSION['id'], time() + 60*60*24*30);
          }

          //redirijo
          header('location: miPerfil.php');

        }
      }
      $errorEmail = 'Usuario o clave inválidos';
    }

  }

 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Livvic|Nunito|Raleway&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Livvic|Nunito|Raleway&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Courgette|Dancing+Script&amp;display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/css/login_registro.css">
    <link rel="stylesheet" href="/css/main.css">

    <title></title>
  </head>


  <body>

    @include('encabezado')

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
            <?php
                echo $errorEmail;
                echo '<br>' . $errorPassword;
            ?>
            <form id="formulario" method="post" action=''>
                <p id="titulo-form"><b>Ingresa tus Datos</b></p>
                <div class= "user_info">
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name='email'
                    value=<?php echo $email; ?>>
                  </div>
                  <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input type="password" class="form-control"  name='password'>
                    <small><a href="#" id="pass">¿Olvidaste tu contraseña?</a> </small>
                  </div>
                  <div class="form-group form-check">
                    <input type="checkbox" name="mantenerme" class="form-check-input" id="mantenerme" value="1">
                    <label class="form-check-label" for="mantenerme">Recuerdame</label>
                  </div>
                  <div class="boton">
                    <button type="submit" class="btn btn_login" >Iniciar Sesión</button>
                  </div>
                  <div class="registrarse">
                    <small id="pass">¿No tenés cuenta? <a href="formularioRegistro.php">Registrate</a> </small>
                  </div>
                </div>
            </form>


          </div>
          <div class="col-lg-3">

          </div>
        </div>


      </div>
    </main>


    @include('footer')



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
  </body>
</html>
