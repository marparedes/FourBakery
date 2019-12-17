<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class PerfilController extends Controller

{
/*    public function perfilUsuario(){
      $usuario = Auth::user();
      return view('miPerfil')->with('user', $usuario);
    }
*/
/*
    public function edit($id){
       $usuario = User::find(Auth::user()->id);
       if(empty($usuario)){
          Flash::error('mensaje error');
          return redirect()->back();
       }
       return view('perfil.editar')->with('user', $usuario);
    }
*/
public function edit(){
       $usuario = User::find(Auth::User()->id);
       if(empty($usuario)){
          Flash::error('mensaje error');
          return redirect()->back();
       }
       return view('perfil.editar')->with('usuario', $usuario);
    }

   public function update(Request $request){
       $usuario = User::find(Auth::User()->id);
       if(empty($usuario)){
          Flash::error('mensaje error');
          return redirect()->back();
       }
       $usuario->fill($request->all());
       $usuario->save();
       Flash::success('Perfil actualizado con éxito.');
       return redirect(route('index'));
    }
  }
