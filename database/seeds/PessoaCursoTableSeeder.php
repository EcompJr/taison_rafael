<?php

use Illuminate\Database\Seeder;
use App\Pessoa;

class PessoaCursoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pessoa::create([
        	'idPessoa' => 1,
        	'curso_id' => 3,
        	'deficiencia' => 'Cego',
        	'email' => 'joao@gmail.com',
        	'nome' => 'João',
        	'sobrenome' => 'da Silva Costa',
        	'dataNascimento' => '25/02/1989',
        	'telefone' => '(75)983621335',
        	'formacao' => 'Segundo grau completo',
        	'cargo' => 'Estudante',
        	'endereco' => 'Rua b nº 500',
        	'bairro' => 'Campo Limpo',
        	'cidade' => 'Feira de Santana',
        	'estado' => 'Bahia',
            'material' => 'Braille'
        ]);

        Pessoa::create([
            'idPessoa' => 2,
            'curso_id' => 3,
            'deficiencia' => 'Cego',
            'email' => 'josepe@gmail.com',
            'nome' => 'João',
            'sobrenome' => 'da Costa Costa',
            'dataNascimento' => '25/02/1989',
            'telefone' => '(75)983621335',
            'formacao' => 'Segundo grau completo',
            'cargo' => 'Estudante',
            'endereco' => 'Rua b nº 500',
            'bairro' => 'Campo Limpo',
            'cidade' => 'Feira de Santana',
            'estado' => 'Bahia',
            'material' => 'Braille'
        ]);
    }
}
