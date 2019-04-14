<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeafarersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seafarers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('desired_salary')->nullable();
            $table->string('citizanship')->nullable();
            $table->string('phone');
            $table->string('email');
            $table->string('english_level')->nullable();
            $table->string('rank')->nullable();
            $table->string('birthday')->nullable();
            $table->string('place_of_birth')->nullable();
            $table->string('country_of_residence')->nullable();
            $table->text('address')->nullable();
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
        Schema::dropIfExists('seafarers');
    }
}
