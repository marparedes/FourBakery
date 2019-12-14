<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/index';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
    

        $reglas = [
            'name' => ['required', 'string', 'max:255', 'min:3'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'avatar' => ['image', 'mimes:jpeg,png,gif,svg', 'max:2048']
        ];
  
        $mensajes = [
            'required' => "Este campo es requerido",
            'string' => "Formato incorrecto",
             'min' => "Este campo :attribute tiene un maximo de :min",
             'mimes' => "Este formato no es valido",
             'unique' => "Este correo ya fue usado",
             'confirmed' => "Las contraseñas no coninciden",
             'email' => "Por favor escribe una dirección de correo valida"
        ];


        return Validator::make($data, $reglas, $mensajes);

    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $imagen = '';
        if (isset($data['avatar'])) {
            $imagen = $data['avatar']->store('public');
            $imagen = basename($imagen);
        }

        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'avatar' => $imagen,
        ]);
    }
    

    public function showRegistrationForm(){
      return view("registro");
    }

    public function agregarUsuario(Request $form){
        
        $usuarioNuevo = new User();
        $usuarioNuevo->name = $form['name'];
        $usuarioNuevo->email = $form['email'];
        $usuarioNuevo->password = Hash::make($form['password']);

        $usuarioNuevo->save();

        return view("index");
      }
}
