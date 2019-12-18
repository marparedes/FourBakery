<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\User;

class PerfilController extends Controller

{
   public function actualizarPerfil(Request $request){
       $usuario = User::find(Auth::User()->id);

       $usuario->name = $request['name'];
       $usuario->email = $request['email'];

       if(isset($request['avatar'])) {
          $imagen = $request['avatar']->store('public');
          $imagen = basename($imagen);

          $usuario->avatar = $imagen;
       }
       
       $usuario->save();
       return redirect("/index");
    }
  }


