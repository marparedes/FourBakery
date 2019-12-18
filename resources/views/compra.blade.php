@extends('layouts.pasteleria')

@section('contenido')
<main>

  <div class="container contenedorProd">
    <h1 style="margin-top:200px; margin-bottom:300px;text-align:center;"> {{Auth::user()->name}}, tu compra fue
      realizada con éxito</h1>
  </div>

</main>

@endsection