<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFinancialCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('financial_category', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descricao');
            $table->string('codigo');
            $table->integer('tipoCarteira')->unsigned();
            $table->integer('classe')->unsigned();
            $table->string('categoriaPaiId')->nullable();
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
        Schema::dropIfExists('financial_category');
    }
}
