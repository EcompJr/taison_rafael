<?php

use Illuminate\Database\Seeder;
use App\Administrador;

class AdministradorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Administrador::create([
        	'idAdministrador' => 1,
        	'nome' => 'Administrador',
        ]);

         Administrador::create([
            'idAdministrador' => 2,
            'nome' => 'José',
        ]);
    }
}
