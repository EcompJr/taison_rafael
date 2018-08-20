<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePessoa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pessoa', function (Blueprint $table) {
            $table->increments('idPessoa');
            $table->integer('curso_id')->unsigned();
            $table->string('deficiencia');
            $table->string('email')->unique();
            $table->string('nome');
            $table->string('sobrenome');
            $table->string('dataNascimento');
            $table->string('telefone');
            $table->string('formacao');
            $table->string('cargo');
            $table->string('endereco');
            $table->string('bairro');
            $table->string('cidade');
            $table->string('estado');
            $table->string('material');
            $table->timestamps();

            $table->index('curso_id', 'fk_pessoa_curso_idx');

            $table->foreign('curso_id', 'fk_pessoa_curso_idx')
                ->references('idCurso')->on('curso')
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
        Schema::dropIfExists('pessoa');
    }
}
