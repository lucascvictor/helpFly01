<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBillsToPay extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bills_to_pay', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('status');
            $table->integer('number')->nullable();
            $table->text('description');
            $table->date('duedate')->nullable();
            $table->float('value')->nullable();
            $table->integer('bank');
            $table->integer('payment_method');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('bills_to_pay');
    }
}
