<?php

use Illuminate\Database\Seeder;
use App\Evento;

class EventoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Evento::create([
	        'idEvento' => 1,
	        'administrador_id' => 1,
	        'descricao' => 'Festividades de Encerramento do Projeto Nordeste.',
	        'data' => '2013/08/22',
	        'hora' => '09:00:00',
	        'local' => 'Auditório da Fundação Jonatas Telles de Carvalho'
	    ]);

        Evento::create([
            'idEvento' => 2,
            'administrador_id' => 2,
            'descricao' => 'Evento novo',
            'data' => '2013/08/22',
            'hora' => '09:00:00',
            'local' => 'Auditório da Fundação Jonatas Telles de Carvalho'
        ]);
    }
}
