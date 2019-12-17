<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    public $table = 'productos';
    //esto lo puedo sacar si hago las migraciones
    public $timestamps = false;

}
