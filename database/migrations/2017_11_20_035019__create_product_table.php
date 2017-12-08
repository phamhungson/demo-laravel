<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product',function (Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $table->string('gender');
            $table->string('size');
            $table->string('product_catalog_id')->index();
            $table->mediumInteger('manafacture_id')->index();
            $table->mediumText('description');
            $table->mediumInteger('unit_price');
            $table->string('image');
            $table->mediumInteger('view');
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
        Schema::dropIfExists('product');
    }
}
