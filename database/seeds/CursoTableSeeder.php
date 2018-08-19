<?php

use Illuminate\Database\Seeder;
use App\Curso;

class CursoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Curso::create([
	        'idCurso' => 1,
	        'administrador_id' => 1,
	        'titulo' => 'A audiodescrição: como um recurso acessível para as pessoas com deficiência visual',
	        'horasCurso' => '8h',
	        'vagas' => 20,
	        'data' => '02/06/2017',
	        'turno' => 'Matutino / Vespertino',
	        'periodoInscricao' => '23 à 31/05/217',
	        'local' => 'CAP'
	    ]);

	    Curso::create([
	        'idCurso' => 2,
	        'administrador_id' => 2,
	        'titulo' => 'Sistema Braille: Técnicas de Leitura e Escrita',
	        'horasCurso' => '20 h',
	        'vagas' => 20,
	        'data' => '12/07/2017',
	        'turno' => 'Matutino / Vespertino',
	        'periodoInscricao' => '03 à 07/07/2017',
	        'local' => 'CAP'
	    ]);

	    Curso::create([
	        'idCurso' => 3,
	        'administrador_id' => 1,
	        'titulo' => 'Baixa Visão e Adaptação de Materiais',
	        'horasCurso' => '20h',
	        'vagas' => 20,
	        'data' => '16/07/2017',
	        'turno' => 'Matutino / Vespertino',
	        'periodoInscricao' => '01 à 11 /08/2017',
	        'local' => 'CAP'
	    ]);

	    Curso::create([
	        'idCurso' => 4,
	        'administrador_id' => 2,
	        'titulo' => 'Soroban: Metodologia e Registro dos Cálculos Matemáticos',
	        'horasCurso' => '20h',
	        'vagas' => 20,
	        'data' => '13/07/2017',
	        'turno' => 'Matutino',
	        'periodoInscricao' => '01 à  06/09/2017',
	        'local' => 'CAP'
	    ]);

	    Curso::create([
	        'idCurso' => 5,
	        'administrador_id' => 1,
	        'titulo' => 'Orientação e mobilidade',
	        'horasCurso' => '20h',
	        'vagas' => 20,
	        'data' => '18/07/2017',
	        'turno' => 'Vespertino',
	        'periodoInscricao' => '02 à 11 /10/2017',
	        'local' => 'CAP'
	    ]);

    }
}
