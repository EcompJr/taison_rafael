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
            $table->tinyInteger('nenhuma')->default(0);;
            $table->tinyInteger('cego')->default(0);;
            $table->tinyInteger('poucaVisao')->default(0);;
            $table->string('email')->unique();
            $table->string('nome');
            $table->string('sobrenome');
            $table->date('dataNascimento');
            $table->string('telefone');
            $table->string('formacao');
            $table->string('funcao');
            $table->string('rua');
            $table->string('numero');
            $table->string('cidade');
            $table->string('estado');

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
