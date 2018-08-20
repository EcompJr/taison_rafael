<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $table = 'curso';
    protected $primaryKey = 'idCurso'; 
    protected $fillable = ['administrador_id', 'material_id', 'titulo', 'vagas', 'horasCurso', 'data', 'turno', 'periodoInscricao', 'local'];
}
