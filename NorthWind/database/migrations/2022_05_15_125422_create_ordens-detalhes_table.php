<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordens-detalhes', function (Blueprint $table) {
            $table->id('IDOrdem');
            $table->int('IDProduto');
            $table->money('PrecoUnitario');
            $table->smallint('Quantidade');
            $table->real('Desconto');
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
        Schema::dropIfExists('ordens-detalhes');
    }
};
