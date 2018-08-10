<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deficiencia extends Model
{
    protected $table = 'deficiencia';
    protected $fillable = ['idDeficiencia', 'nome'];

	public $timestamps = false;
}
