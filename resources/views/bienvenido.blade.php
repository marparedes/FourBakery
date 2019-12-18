<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Bienvenida</title>
  </head>
  <body>
    <h1>¡Bienvenido {{ $name }}! Te registraste correctamente.</h1>
    @if(@Auth::user()->hasRole('cliente'))
    <h2>Eres un cliente</h2>
    @endif  

  </body>
</html>
