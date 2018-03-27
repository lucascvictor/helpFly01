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
            $table->integer('personTypeNfse')->unsigned();
            $table->string('suframal');
            $table->string('municipalInscription');
            $table->bool('simplesNacional');
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
            $table->string('observation');
            $table->bool('isSupplier');   
            $table->bool('isCarrier');
            $table->bool('isCustomer');
            $table->bool('isSalesMan');

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
