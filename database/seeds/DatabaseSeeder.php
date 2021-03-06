<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call([UsuarioTableSeeder::class,
        	AdministradorTableSeeder::class,
            CursoTableSeeder::class,
            EventoTableSeeder::class,
            PessoaCursoTableSeeder::class,
            FotoTableSeeder::class,
            MensagemTableSeeder::class
        ]);
    }
}
