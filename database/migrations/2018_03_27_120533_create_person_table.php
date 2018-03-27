<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('person', function (Blueprint $table) {
            $table->increments('id');
            $table->string('document')->unique();
            $table->string('name');
            $table->string('traddingName');
            $table->integer('type')->unsigned();
            $table->string('stateInscription');
            $table->bool('chkIsento');
            $table->integer('personTypeNfseField')->unsigned();
            $table->string('suframal');
            $table->string('municipalInscription');
            $table->bool('simplesNacionalBool');
            $table->string('otherCityAutoComplete');
            $table->string('email');
            $table->string('phone');
            $table->string('contato');
            $table->string('celPhone');
            $table->string('zipCode');
            $table->string('stateField');
            $table->string('cityDescricao');
            $table->string('neighborhood');
            $table->string('adress');
            $table->string('observationField');
            $table->bool('isSupplierBool');   
            $table->bool('isCarrierBool');
            $table->bool('isCustomerBool');
            $table->bool('isSalesManBool');

            $table->rememberToken();
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
        Schema::dropIfExists('person');
    }
}
