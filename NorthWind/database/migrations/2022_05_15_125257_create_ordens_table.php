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
        Schema::create('ordens', function (Blueprint $table) {
            $table->id('IDOrdem');
            $table->nchar('IDCliente',5);
            $table->int('IDFuncionarios');
            $table->datetime('DataOrdem');
            $table->datetime('DataRequisucao');
            $table->datetime('DataEntrega');
            $table->int('EnviaoPor');
            $table->money('Frete');
            $table->nvarchar('NomeDestinatario',40);
            $table->nvarchar('EnderecoDestinatario',60);
            $table->nvarchar('CidadeDestinatario',15);
            $table->nvarchar('RegiaoDestinatario',15);
            $table->nvarchar('Cepdestinatario',10);
            $table->nvarchar('PaisDestinatario',15);
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
        Schema::dropIfExists('ordens');
    }
};
