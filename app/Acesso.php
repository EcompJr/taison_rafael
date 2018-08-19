<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Acesso extends Model
{
    protected $table = 'acesso'; 
    protected $fillable = ['numero'];

	public $timestamps = false;
}
