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
        Schema::create('clientes', function (Blueprint $table) {
            $table->IDCliente();
            $table->string('NomeCompanhia',100);
            $table->string('NomeContato',100);
            $table->string('TituloContato',50);
            $table->string('Endereco',50);
            $table->string('Cidade',50);
            $table->string('Regiao',50);
            $table->string('CEP',15);
            $table->string('Pais',25);
            $table->string('Telefone',15);
            $table->string('Fax',25);
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
        Schema::dropIfExists('clientes');
    }
};
