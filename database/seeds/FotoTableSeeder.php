<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FotoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('foto')->insert([
            ['evento_id' => 1, 'path'=>'img/img-eventos/Festividades_1.jpg'],

            ['evento_id' => 2, 'path'=>'img/img-eventos/Descrição_2.jpg'],

            ['evento_id' => 3, 'path'=>'img/img-eventos/Teste_3.jpg'],
        ]);
    }
}
