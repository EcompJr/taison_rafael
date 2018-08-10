<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $table = 'curso'; 
    protected $fillable = ['idCurso', 'administrador_id', 'material_id', 'titulo', 'vagas', 'horasCurso', 'data', 'turno', 'periodoInscricao', 'local', 'braille', 'digitalizado', 'ampliado'];

	public $timestamps = false;
}
