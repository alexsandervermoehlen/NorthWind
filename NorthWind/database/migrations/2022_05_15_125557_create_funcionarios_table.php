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
        Schema::create('funcionarios', function (Blueprint $table) {
            $table->id('IDFuncionario');
            $table->nvarchar('Sobrenome',20);
            $table->nvarchar('Nome',10);
            $table->nvarchar('Titulo',30);
            $table->nvarchar('TituloCortesia',25);
            $table->datetime('DataNac');
            $table->datetime('DataAdmissao');
            $table->nvarchar('Endereco',60);
            $table->nvarchar('Cidade',15);
            $table->nvarchar('Regiao',15);
            $table->nvarchar('Cep',10);
            $table->nvarchar('Pais',15);
            $table->nvarchar('TelefoneResidencial',24);
            $table->nvarchar('Extensao',4);
            $table->image('Foto');
            $table->mtext('Notas');
            $table->int('Reportase');
            $table->nvarchar('FotoCaminho',255);
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
        Schema::dropIfExists('funcionarios');
    }
};
