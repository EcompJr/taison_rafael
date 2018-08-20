<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    protected $table = 'log';
    protected $fillable = ['usuario_id', 'data', 'hora',];
    public $timestamps = false;

    public function usuario()
    {
        return $this->belongsTo('App\User', 'usuario_id');
    }
}
