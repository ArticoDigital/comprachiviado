<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('nit')->nullable();
            $table->string('address')->nullable();
            $table->string('company-email')->nullable();
            $table->string('city')->nullable();
            $table->string('contact-name')->nullable();
            $table->string('contact-tel')->nullable();
            $table->string('contact-cel')->nullable();
            $table->string('contact-email')->nullable();
            $table->string('contact-iddoc')->nullable();
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
        Schema::dropIfExists('companies');
    }
}
