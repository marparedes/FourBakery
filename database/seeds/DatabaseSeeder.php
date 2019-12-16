<?php

use App\Producto;
use Illuminate\Database\Seeder;
use Illuminate\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

      $tortas = DB::table('categorias')->where('nombreCateg','Tortas')->value('id');
      //dd($tortas);
      DB::table('productos')->insert([
        'nombre' => 'Torta Aniversario',
        'descripcion' => 'Torta de 2 pisos para aniversario de bodas',
        'descuento' => 0,
        'stock' => 5,
        'precio' => 900,
        'img' => '/img/tortaAniversario.jpg',
        'id_categoria' => $tortas
      ]);
    }
}
