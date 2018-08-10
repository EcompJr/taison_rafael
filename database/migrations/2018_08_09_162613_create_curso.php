<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCurso extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curso', function (Blueprint $table) {
            $table->increments('idCurso');
            $table->integer('administrador_id')->unsigned();
            $table->string('titulo');
            $table->integer('vagas')->unsigned();
            $table->string('horasCurso');
            $table->date('data');
            $table->string('turno');
            $table->string('periodoInscricao');
            $table->string('local');
            $table->tinyInteger('braille')->default(0);
            $table->tinyInteger('digitalizado')->default(0);
            $table->tinyInteger('ampliado')->default(0);

            $table->index(['administrador_id'], 'fk_curso_administrador_idx');

            $table->foreign('administrador_id', 'fk_curso_administrador_idx')
                ->references('idAdministrador')->on('administrador')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('curso');
    }
}
