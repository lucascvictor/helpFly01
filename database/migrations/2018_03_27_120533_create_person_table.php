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
            $table->string('traddingName')->nullable();
            $table->integer('type')->unsigned();
            $table->string('stateInscription')->nullable();
            $table->boolean('chkIsento')->nullable();
            $table->integer('personTypeNfse')->unsigned()->nullable();
            $table->string('suframal')->nullable();
            $table->string('municipalInscription')->nullable();
            $table->boolean('simplesNacional')->nullable();
            $table->string('otherCityAutoComplete')->nullable();
            $table->string('email');
            $table->string('phone')->nullable();
            $table->string('contato')->nullable();
            $table->string('celPhone')->nullable();
            $table->string('zipCode')->nullable();
            $table->string('state')->nullable();
            $table->string('city')->nullable();
            $table->string('neighborhood')->nullable();
            $table->string('adress')->nullable();
            $table->string('observation')->nullable();
            $table->boolean('isSupplier');   
            $table->boolean('isCarrier');
            $table->boolean('isCustomer');
            $table->boolean('isSaller');
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
