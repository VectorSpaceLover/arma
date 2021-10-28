<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArmasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('armas', function (Blueprint $table) {
            $table->id();
            $table->string('numero', 100);
            $table->string('marca', 100);
            $table->string('calibre', 100);
            $table->string('municoes', 100);
            $table->string('carregamento', 100);
            $table->string('origem_importacao', 100);
            $table->string('modelo', 100);
            $table->string('classificacao', 100);
            $table->string('nr_tiros', 100);
            $table->string('percussao', 100);
            $table->string('comprimento', 100);
            $table->string('mecanismo', 100);
            $table->string('estado')->default(1);
            $table->unsignedBigInteger('categoria_id');
            $table->foreign('categoria_id')->references('id')->on('categorias')->onDelete('cascade')->onUpdate('cascade');
            $table->double('preco');
            $table->string('quantidade_stoque');
             $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('armas');
    }
}
