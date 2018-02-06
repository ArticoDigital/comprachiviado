<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBannersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banners', function (Blueprint $table) {
            $table->increments('id');
            $table->string('background_color')->nullable();
            $table->string('background_image')->nullable();
            $table->string('text_title')->nullable();
            $table->longText('product_text_content')->nullable();
            $table->string('product_text_color')->nullable();
            $table->string('product_text_location')->nullable();
            $table->string('text_button')->nullable();
            $table->boolean('is_active');
            $table->string('url_button')->nullable();
            $table->integer('order')->nullable();
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
        Schema::dropIfExists('banners');
    }
}
