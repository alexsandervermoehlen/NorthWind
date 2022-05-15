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
        Schema::create('fornecedores', function (Blueprint $table) {
            $table->id('IDFornecedores');
            $table->nvarchar('NomeCompanhia',40);
            $table->nvarchar('NomeContato',30);
            $table->nvarchar('TituloContato',30);
            $table->nvarchar('Endereco',60);
            $table->nvarchar('Cidade',15);
            $table->nvarchar('Regiao',15);
            $table->nvarchar('cep',10);
            $table->nvarchar('Pais',15);
            $table->nvarchar('Telefone',24);
            $table->nvarchar('Fax',24);
            $table->ntext('Website');
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
        Schema::dropIfExists('fornecedores');
    }
};
