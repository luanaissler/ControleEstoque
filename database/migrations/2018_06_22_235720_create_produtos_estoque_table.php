<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutosEstoqueTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos_estoque', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_estoque');
            $table->unsignedInteger('id_produto');
            $table->integer('quantidade');
            $table->timestamps();

            $table->foreign('id_estoque')->references('id')->on('estoques');
            $table->foreign('id_produto')->references('id')->on('produtos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produtos_estoque');
    }
}
