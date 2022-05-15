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
        Schema::create('produtos', function (Blueprint $table) {
            $table->id('IDProdutos');
            $table->nvarchar('NomeProduto',40);
            $table->int('IDFornecedor');
            $table->int('IDCategoria');
            $table->nvarchar('QuantidadePorUnidade',20);
            $table->money('Preco\unitario');
            $table->smallint('UnidadesEmEstoque');
            $table->smallint('UnidadesEmOrdem');
            $table->smallint('NivelDeReposicao');
            $table->bit('Descontinuado');
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
};
