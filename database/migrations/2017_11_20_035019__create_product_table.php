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
            $table->increments('product_id');
            $table->string('produtc_name');
            $table->string('gender');
            $table->string('size');
            $table->string('product_catalog_id')->index();
            $table->mediumInteger('manafacture_id')->index();
            $table->mediumText('description');
            $table->mediumInteger('unit_price');
            $table->mediumInteger('promotion_price');
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
