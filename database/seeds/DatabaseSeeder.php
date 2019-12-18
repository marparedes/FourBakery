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
      DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
      DB::table('productos')->truncate();
      DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
      //$this->call(SeederProductos::class);
      $tortas = DB::table('categorias')->where('nombreCateg','Tortas')->value('id');
      $tartas = DB::table('categorias')->where('nombreCateg','Tartas')->value('id');
      $macarons = DB::table('categorias')->where('nombreCateg','Macarons')->value('id');
      $cookies = DB::table('categorias')->where('nombreCateg','Cookies')->value('id');
      $otros = DB::table('categorias')->where('nombreCateg','Otros')->value('id');


      DB::table('productos')->insert([
        'nombre' => 'Torta Macarrons',
        'descripcion' => 'Torta de vainilla decorada con chocolate y macarons ',
        'descuento' => 0,
        'stock' => 5,
        'precio' => 500,
        'img' => '/img/torta3.jpg',
        'categoria_id' => $tortas
      ]);

      DB::table('productos')->insert([
        'nombre' => 'Cupcake',
        'descripcion' => 'La receta base de un cupcake es la misma que la de cualquier otra tarta: mantequilla, azúcar, huevos, levadura y harina.
        La decoración de los cupcakes consta de un glaseado, de una crema de mantequilla.',
        'descuento' => 0,
        'stock' => 50,
        'precio' => 90,
        'img' => '/img/CupCake.jpg',
        'categoria_id' => $otros
      ]);

      DB::table('productos')->insert([
        'nombre' => 'Torta Celebracion',
        'descripcion' => 'Torta de vainilla con decoracion colorida, perfecto para fiestas.',
        'descuento' => 0,
        'stock' => 5,
        'precio' => 800,
        'img' => '/img/torta1.jpg',
        'categoria_id' => $tortas
      ]);

      DB::table('productos')->insert([
        'nombre' => 'Torta ChocoCookie',
        'descripcion' => 'Torta de chocolate con decoracion de cookies de chocolate',
        'descuento' => 0,
        'stock' => 6,
        'precio' => 800,
        'img' => '/img/chocolate.jpg',
        'categoria_id' => $tortas
      ]);


      DB::table('productos')->insert([
        'nombre' => 'Panettone',
        'descripcion' => 'También llamado pan dulce, es un bollo hecho con una masa de tipo brioche, pasas y/o frutas secas.',
        'descuento' => 0,
        'stock' => 15,
        'precio' => 900,
        'img' => '/img/panettone.jpg',
        'categoria_id' => $otros
      ]);

      DB::table('productos')->insert([
        'nombre' => 'Chocolate drip cake',
        'descripcion' => 'Torta simple de chocolate con chocolate derramado como decoracion',
        'descuento' => 0,
        'stock' => 6,
        'precio' => 700,
        'img' => '/img/chocolateCake.jpg',
        'categoria_id' => $tortas
      ]);

      DB::table('productos')->insert([
        'nombre' => 'Cheesecake',
        'descripcion' => 'Cremoso y compacto, el cheesecake se compone de una pasta preparada a partir de
        bizcocho seco desmenuzado, mantequilla y azúcar. Está relleno con queso blanco espeso, mezclado
        con huevos y azúcar. Decorado con frutos rojos.',
        'descuento' => 0,
        'stock' => 8,
        'precio' => 500,
        'img' => '/img/torta de queso.jpg',
        'categoria_id' => $tortas
      ]);

      DB::table('productos')->insert([
        'nombre' => 'Galletas Chocolate Chips',
        'descripcion' => 'Tipicas galletas de chocolate con choco chips',
        'descuento' => 0,
        'stock' => 25,
        'precio' => 100,
        'img' => '/img/galleta.jpg',
        'categoria_id' => $cookies
      ]);

      DB::table('productos')->insert([
        'nombre' => 'Postre',
        'descripcion' => ' ',
        'descuento' => 0,
        'stock' => 13,
        'precio' => 80,
        'img' => '/img/postre1.jpg',
        'categoria_id' => $otros
      ]);

      DB::table('productos')->insert([
        'nombre' => 'Torta Decorada',
        'descripcion' => 'Torta de vainilla decorada',
        'descuento' => 0,
        'stock' => 7,
        'precio' => 500,
        'img' => '/img/torta2.jpg',
        'categoria_id' => $tortas
      ]);

      DB::table('productos')->insert([
        'nombre' => 'Macarrons',
        'descripcion' => 'Los macarons son unos tradicionales dulces franceses, una especie de galletitas
         con relleno de crema, elaboradas con clara de huevo, almendras y azúcar molidas.
         Los macarons no sólo se distinguen por su delicioso sabor sino también por sus fantásticos colores.',
        'descuento' => 0,
        'stock' => 30,
        'precio' => 200,
        'img' => '/img/macarrones.jpg',
        'categoria_id' => $macarons
      ]);

      DB::table('productos')->insert([
        'nombre' => 'Mini tarta frutal',
        'descripcion' => 'Mini tartas decoradas con distintas frutas',
        'descuento' => 0,
        'stock' => 10,
        'precio' => 500,
        'img' => '/img/galletaCake.jpg',
        'categoria_id' => $tartas
      ]);



      //productos nuevos
      DB::table('productos')->insert([
        'nombre' => 'Galleta Navidad (Opcion 1)',
        'descripcion' => '',
        'descuento' => 0,
        'stock' => 30,
        'precio' => 100,
        'img' => '/img/galletaNavidad.jpg',
        'categoria_id' => $cookies
      ]);

      DB::table('productos')->insert([
        'nombre' => 'Galleta Navidad (Opcion 2)',
        'descripcion' => '',
        'descuento' => 0,
        'stock' => 30,
        'precio' => 100,
        'img' => '/img/galletanavidad2.jpg',
        'categoria_id' => $cookies
      ]);

      DB::table('productos')->insert([
        'nombre' => 'Muffins',
        'descripcion' => 'Muffins de vainilla con base de frutos rojos',
        'descuento' => 0,
        'stock' => 30,
        'precio' => 90,
        'img' => '/img/muffins.jpg',
        'categoria_id' => $otros
      ]);

      DB::table('productos')->insert([
        'nombre' => 'Tartaletas',
        'descripcion' => 'Mini tartas o tartaletas con frutos rojos ',
        'descuento' => 0,
        'stock' => 20,
        'precio' => 500,
        'img' => '/img/tartaletas.jpg',
        'categoria_id' => $tartas
      ]);

      DB::table('productos')->insert([
        'nombre' => 'Torta de Cumpleaños',
        'descripcion' => 'Torta de cumpleaños decorada muy colorida. Perfecta para cumpleaños infantiles',
        'descuento' => 0,
        'stock' => 10,
        'precio' => 400,
        'img' => '/img/torta5.jpg',
        'categoria_id' => $tortas
      ]);

      DB::table('productos')->insert([
        'nombre' => 'Torta Aniversario',
        'descripcion' => 'Torta de dos pisos para aniversario de bodas',
        'descuento' => 0,
        'stock' => 5,
        'precio' => 500,
        'img' => '/img/tortaAniversario.jpg',
        'categoria_id' => $tortas
      ]);

      DB::table('productos')->insert([
        'nombre' => 'Torta Boda',
        'descripcion' => 'Torta de 3 pisos para bodas',
        'descuento' => 0,
        'stock' => 5,
        'precio' => 700,
        'img' => '/img/tortaBoda.jpg',
        'categoria_id' => $tortas
      ]);

      DB::table('productos')->insert([
        'nombre' => 'Torta Chica Boda',
        'descripcion' => 'Torta de 1 piso para bodas',
        'descuento' => 0,
        'stock' => 7,
        'precio' => 400,
        'img' => '/img/tortaBoda3.jpg',
        'categoria_id' => $tortas
      ]);

      DB::table('productos')->insert([
        'nombre' => 'Torta Celebracion',
        'descripcion' => 'Torta simple de vainilla para celebrar distintas ocaciones',
        'descuento' => 0,
        'stock' => 10,
        'precio' => 300,
        'img' => '/img/tortaCelebracion.jpg',
        'categoria_id' => $tortas
      ]);

      DB::table('productos')->insert([
        'nombre' => 'Torta Arcoiris Cumpleaños',
        'descripcion' => 'Torta de arcoiris rellena con capas de crema. Torta de cumpleaños',
        'descuento' => 0,
        'stock' => 10,
        'precio' => 650,
        'img' => '/img/tortaCumple.jpg',
        'categoria_id' => $tortas
      ]);

      DB::table('productos')->insert([
        'nombre' => 'Torta Navidad',
        'descripcion' => 'Torta de chocolate con cerezas como decoracion',
        'descuento' => 0,
        'stock' => 9,
        'precio' => 400,
        'img' => '/img/tortaNavidad.jpg',
        'categoria_id' => $tortas
      ]);

      DB::table('productos')->insert([
        'nombre' => 'Torta Negra',
        'descripcion' => 'Torta de chocolate con frutos rojos como decoracion ',
        'descuento' => 0,
        'stock' => 10,
        'precio' => 400,
        'img' => '/img/tortaNegra.jpg',
        'categoria_id' => $tortas
      ]);

      DB::table('productos')->insert([
        'nombre' => 'Torta Zanahoria',
        'descripcion' => 'Torta con base de biscochuela de zanahoria. Decoracion de almenandras y zanahoria ',
        'descuento' => 0,
        'stock' => 10,
        'precio' => 600,
        'img' => '/img/tortaZanahoria.jpg',
        'categoria_id' => $tortas
      ]);

      DB::table('productos')->insert([
        'nombre' => 'Trufas',
        'descripcion' => 'La trufa de chocolate es un dulce con aspecto y sabor similar al bombón pero
        elaborado con una mezcla de chocolate negro fundido, mantequilla, azúcar glas, yema de huevo y
        a veces crema de leche. ',
        'descuento' => 0,
        'stock' => 40,
        'precio' => 90,
        'img' => '/img/trufas.jpg',
        'categoria_id' => $otros
      ]);

      DB::table('productos')->insert([
        'nombre' => 'Torta Infantil',
        'descripcion' => 'Torta de vainilla, perfecta para cumpleaños infantiles ',
        'descuento' => 0,
        'stock' => 6,
        'precio' => 400,
        'img' => '/img/tortaDecorada.jpg',
        'categoria_id' => $tortas
      ]);


    }
}
