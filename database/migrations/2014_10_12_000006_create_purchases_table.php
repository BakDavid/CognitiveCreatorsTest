<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchases', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned();
            $table->string('person_type')->nullable();
            $table->string('name')->nullable();
            $table->string('first_name')->nullable();
            $table->string('email')->nullable();
            $table->string('address')->nullable();
            $table->string('IBAN')->nullable();
            $table->string('bank')->nullable();
            $table->string('registration_number')->nullable();
            $table->string('delivery_method')->nullable();
            $table->string('payment_method')->nullable();
            $table->string('comment')->nullable();
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('purchases');
    }
}
