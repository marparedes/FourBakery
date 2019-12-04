<?php

  //include_once('funciones/autenticador.php');

  $email='';
  $telefono='';
  $nombre='';
  $errorEmail='';
  $errorTel='';
  $errorPassword='';
  $errorConfirmarPass= '';
  $terminos= '';

  if($_POST){

    $email= $_POST['email'];
    $password= $_POST['password'];
    $confirmar = $_POST['confirmar'];
    $nombre= $_POST['nombre'];
    $telefono= $_POST['telefono'];

    $nombreArchivo='';


      //validaciones

    if($email == ''){
      $errorEmail = 'Ingresa tu email';
    } else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
      $errorEmail = 'El email es inválido';
    } //verificar que el email no esté registrado ya


    if($telefono= ''){
      $errorTel= 'Ingresa tu telefono';
    }
    if($password == ''){
      $errorPassword = 'Ingresa tu password';
    }
    if($confirmar==''){
      $errorConfirmarPass= 'Confirma la contraseña';
    } else if($confirmar != $password){
      $errorConfirmarPass = 'La contraseña no coincide';
    }
    if(!isset($_POST['terminos'])){
      $terminos = 'Acepta los terminos y condiciones';
    }

    //si subio un archivo lo guardo en la carpeta avatars

    if($_FILES){
      if ($_FILES['avatar']['error'] === 0) {
            //pido la extension del archivo
            $ext = pathinfo($_FILES['avatar']['name'], PATHINFO_EXTENSION);
            if ($ext != 'png' && $ext != 'jpg' && $ext != 'jpeg') {
                $errorAvatar = 'Archivo de formato invalido';
            } else {
                $nombreArchivo = $email . '.' . $ext;
                //voy a mover el archivo del temporal a mi carpeta avatars
                move_uploaded_file($_FILES['avatar']['tmp_name'], 'avatars/' . $nombreArchivo); //crear carpeta avatars
            }
        }
    }



    if(empty($errorTel) && empty($errorEmail) && empty($errorPassword) && empty($errorAvatar) && empty($errorConfirmarPass) && empty($terminos)){

      //levanto mi archivo en formato json
      $archivo = file_get_contents('json/usuarios.json');
      //lo transformo a variables en php
      $usuarios = json_decode($archivo, true);
      $id = 0;
      foreach ($usuarios as $usuario) {
          if ($usuario['id'] > $id) {
              $id = $usuario['id'];
          }
      }
      $id++;

      $hash= password_hash($_POST['password'], PASSWORD_DEFAULT);

      //guardo los datos del usuario
      $usuario= [
        'nombre' => $nombre,
        'email' => $email,
        'password' => $hash,
        'telefono' => $telefono,
        'avatar' => $nombreArchivo,
        'admin' => false,
        'id' => $id
      ];

      //agrego el usuario al array usuarios
      $usuarios[] = $usuario;

      $json= json_encode($usuarios);

      file_put_contents('json/usuarios.json', $json);

      //var_dump($usuario);
      //var_dump($json);

      header('location:formularioLogin.php');
    }
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <script type="text/javascript" src="/js/validacionRegistro.js"></script>
    <meta name="viewport" content="width-device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf"crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Livvic|Nunito|Raleway&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Courgette|Dancing+Script&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="/css/login_registro.css"> <?php //revisar ruta ?>
    <title></title>
  </head>
  <body>

  <?php //require("encabezado.php"); ?>

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

                <?php
                //var_dump($_POST);
                 echo $errorTel;
                 echo $errorEmail;
                 echo $errorPassword;
                 echo $errorConfirmarPass;
                 echo $terminos;
                 ?>
              <form id="formulario" method='post' action="formularioRegistro.php" enctype="multipart/form-data">
                <p id="titulo-form"><b>Ingresa tus Datos</b></p>
                <div class= "user_info">
                <div class="form-group" >
                  <label for="nombre">Nombre</label>
                  <input type="text" class="form-control" name="nombre" value='<?php echo $nombre; ?>'>
                </div>
                <div class="form-group">
                  <label for="tel">Telefono</label>
                  <input type="tel" class="form-control" name="telefono" value='<?php echo $telefono; ?>'>
                </div>
                <div class= form-group>
                  <label for="email">Email</label>
                  <input type="email" class="form-control" name="email" id="exampleInputEmail1"
                  aria-describedby="emailHelp" value='<?php echo $email; ?>'>
                </div>
                <div class="form-group">
                  <label for="password">Contraseña</label>
                  <input type="password" class="form-control" name="password" id="exampleInputPassword1">
                </div>
                <div class="form-group">
                  <label for="confirm-password">Confirmar Password</label>
                  <input type="password" class="form-control" name="confirmarPass" id="confirm-password" >
                </div>
                <div class="form-group">
                  <label for="avatar">Subir avatar</label>
                  <input type="file" name="avatar" id="avatar">
                </div>
                <div class="form-group form-check">
                  <input type="checkbox" class="form-check-input" id="terminos" name="terminos">
                  <label class="form-check-label" for="terminos">Acepto terminos y condiciones</label>
                </div>

                <div class="boton">
                  <button type="submit" class="btn btn_login" >Registrarse</button>
                </div>
              </div>
              </form>
            </div>

            <div class="col-lg-3">

            </div>


          </div>
        </div>


      </main>


      <?php //require("pieDePagina.php"); ?>

      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
      </body>


  </html>
