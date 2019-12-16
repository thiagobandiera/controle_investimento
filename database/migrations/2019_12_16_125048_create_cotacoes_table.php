<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCotacoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cotacoes', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->date('RptDt')->nullable();                  //Data do Relatorio.
            $table->string('TckrSymb')->nullable();             //Codigo negociado/registrado em bolsa de valores.
            $table->string('ISIN')->nullable();                 //Padronização internacional na codificação de títulos financeiros.
            $table->string('SgmtNm')->nullable();               //Nome do segmento.
            $table->double('MinPric', 10, 2)->nullable();       //Preço mínimo do dia.
            $table->double('MaxPric', 10, 2)->nullable();       //Preço máximo do dia.
            $table->double('TradAvrgPric', 10, 2)->nullable();  //Preço médio dos negócios do dia.
            $table->double('LastPric', 10, 2)->nullable();      //Preço de fechamento do dia.
            $table->double('AdjstdQt', 10, 3)->nullable();      //Cotação ajuste (futuro) e opções com ajustes.
            $table->double('RefPric', 10, 2)->nullable();       //Fornece preço de referência.
            $table->bigInteger('TradQty')->nullable();          //Quantidade de negócios no dia. 
            $table->bigInteger('FinInstrmQty')->nullable();     //Quantidade de contratos/títulos negociados no dia.

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cotacoes');
    }
}
