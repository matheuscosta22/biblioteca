<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLivro extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('livro', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo');
            $table->string('anoDeLancamento');
            $table->integer('id_autor')->unsigned();
            $table->foreign('id_autor')->references('id')->on('autor')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('id_genero')->unsigned();
            $table->foreign('id_genero')->references('id')->on('genero')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('id_editora')->unsigned();
            $table->foreign('id_editora')->references('id')->on('editora')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('livro');
    }
}
