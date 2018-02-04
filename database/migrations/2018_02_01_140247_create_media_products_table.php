<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMediaProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('media_products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('order');
            $table->integer('media_type_id')->unsigned();
            $table->foreign('media_type_id')->references('id')->on('media_types');

            $table->integer('product_id');
            $table->string('product_type');
            //$table->integer('commentable_id');
            //$table->string('commentable_type');

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
        Schema::dropIfExists('media_products');
    }
}
