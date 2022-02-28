<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produto', function (Blueprint $table) {
            $table->increments('produto_id');
            $table->string('nome');
            $table->decimal('preco', $precision = 8, $scale = 2);
            $table->string('imagem');
            $table->Integer('loja_id')->unsigned();
            $table->Integer('departamento_id')->unsigned();
            $table->foreign('loja_id')
                ->references('loja_id')->on('loja')
                ->onDelete('restrict');
            $table->foreign('departamento_id')
                ->references('departamento_id')->on('departamento')
                ->onDelete('restrict');
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
        Schema::dropIfExists('produtos');
    }
}
