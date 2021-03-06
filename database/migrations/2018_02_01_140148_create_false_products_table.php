<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFalseProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('false_products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('shortdescription')->nullable();
            $table->longText('description')->nullable();

            $table->string('video_promo')->nullable();
            $table->longText('invitation_text');

            $table->integer('price');
            $table->string('image_pc');
            $table->string('image_mobile')->nullable();
            $table->boolean('is_active');
            $table->string('location_product')->nullable();

            $table->integer('subcategory_id')->unsigned();
            $table->foreign('subcategory_id')->references('id')->on('subcategories');


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
        Schema::dropIfExists('false_products');
    }
}
