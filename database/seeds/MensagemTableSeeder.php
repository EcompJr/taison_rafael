<?php

use Illuminate\Database\Seeder;
use App\Mensagem;

class MensagemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Mensagem::create([
        	'id' => 1,
        	'nome' => 'Josias Costa Silva',
        	'email' => 'josias@hotmail.com',
        	'assunto' => 'Cursos Ofertados',
        	'mensagem' => 'Olá, como vão? Eu gostaria de saber se o curso é pago ou é ofertado pela organização.',
            'resposta' => 'Resposta do administrador',
            'respondido' => true
        ]);

        Mensagem::create([
        	'id' => 2,
        	'nome' => 'Ana da Silva Chateaubriand',
        	'email' => 'ana@gmail.com',
        	'assunto' => 'Eventos',
        	'mensagem' => 'Olá, Esses eventos ocorrem na própria organização.',
            'respondido' => false
        ]);
    }
}
