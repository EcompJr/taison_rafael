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
        date_default_timezone_set('America/Sao_Paulo');
        
        Evento::create([
	        'id' => 1,
	        'administrador_id' => 1,
            'titulo' => 'Festividades de Encerramento do Projeto Nordeste',
	        'descricao' => 'Você que amou e se encantou com o Projeto Nordeste, que juntos realizamos, está convidado para as Festividades de Encerramento.',
	        'data' => '22/08/2013',
	        'hora' => '09:00',
	        'local' => 'Auditório da Fundação Jonatas Telles de Carvalho'
	    ]);

        Evento::create([
            'id' => 2,
            'administrador_id' => 2,
            'titulo' => 'Evento',
            'descricao' => 'Descrição do evento',
            'data' => '22/08/2013',
            'hora' => '09:00',
            'local' => 'Auditório da Fundação Jonatas Telles de Carvalho'
        ]);

        Evento::create([
            'id' => 3,
            'administrador_id' => 1,
            'titulo' => 'Teste de Evento',
            'descricao' => 'Vamos estar juntos neste grande evento "isso é um teste" ',
            'data' => '22/08/2018',
            'hora' => '08:30',
            'local' => 'Auditório da Fundação Jonatas Telles de Carvalho'
        ]);
    }
}
