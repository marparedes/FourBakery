<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class RolesAndPermissions extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // Reset cached roles and permissions
      app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();


        // create permissions
        Permission::create(['name' => 'crear_producto']);
        Permission::create(['name' => 'editar_producto']);
        Permission::create(['name' => 'agregar_producto']);
        Permission::create(['name' => 'eliminar_producto']);

                // create roles and assign created permissions

                // this can be done as separate statements
                $role = Role::create(['name' => 'administrador']);
                $role->givePermissionTo(Permission::all());


    }
}
