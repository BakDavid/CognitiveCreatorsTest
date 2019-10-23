<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('category')->nullable();
            $table->string('brand')->nullable();
            $table->string('size')->nullable();
            $table->double('old_price',8,2)->nullable();
            $table->double('new_price',8,2)->nullable();
            $table->double('vat_price',8,2)->nullable();
            $table->string('tires_load_index')->nullable();
            $table->integer('quantity')->default(0);
            $table->string('season')->nullable();
            $table->string('specific')->nullable();
            $table->string('image')->nullable();
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
        Schema::dropIfExists('products');
    }
}
