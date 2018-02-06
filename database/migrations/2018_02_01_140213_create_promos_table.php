<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePromosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promos', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name');
            $table->date('init_date');
            $table->date('finish_date')->nullable();
            $table->string('special_media')->nullable();
            $table->longText('text_promo')->nullable();
            $table->integer('discount_percentage')->nullable();
            $table->binary('is_active');

            $table->integer('false_product_id')->unsigned();
            $table->foreign('false_product_id')->references('id')->on('false_products');

            $table->integer('company_id')->unsigned();
            $table->foreign('company_id')->references('id')->on('companies');

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
        Schema::dropIfExists('promos');
    }
}
