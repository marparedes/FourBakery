<?php

use Illuminate\Database\Seeder;

use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // usuario con el rol administrador
        $administrador = User::create([
          'name' => 'administrador',
          'email'=> 'administrador@gmail.com',
          'password'=> bcrypt ('12345678')
        ]);

        $administrador->assignRole('administrador');

    }
}
