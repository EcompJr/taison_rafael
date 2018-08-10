<?php

use Illuminate\Database\Seeder;
use App\User;

class UsuarioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		User::create([
            //Administrador id 1
	        'email' => 'administrador@gmail.com',
	        'password' => bcrypt('12345678')
	    ]);

        User::create([
            //Administrador id 2
            'email' => 'administrador2@gmail.com',
            'password' => bcrypt('12345678')
        ]);
    }
}
