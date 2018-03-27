<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTermsOfPaymentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('terms_of_payment', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descricao');
            $table->string('TipoSimulacaoField');
            $table->string('qtdParcelas');
            $table->string('condicoesParcelamento');
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
        Schema::dropIfExists('terms_of_payment');
    }
}
