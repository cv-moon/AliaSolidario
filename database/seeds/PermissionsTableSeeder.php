<?php

use Caffeinated\Shinobi\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create([
            'name' => "Acceder a Solicitudes",
            'slug' => "solicitudes.index",
            'description' => "MRegistrar Solicitudes"
        ]);
    }
}
