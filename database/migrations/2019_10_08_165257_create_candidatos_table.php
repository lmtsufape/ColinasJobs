<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidatos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id')->nullable();
            $table->string('nome_completo')->nullable();
            $table->string('cpf')->nullable();
            $table->string('email')->nullable();
            $table->string('telefone')->nullable();
            $table->string('celular')->nullable();
            $table->string('nivel_de_formacao')->nullable();
            $table->string('funcao')->nullable();
            $table->string('tipo_de_deficiencia');
            $table->date('data_de_nascimento')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('candidatos');
    }
}
