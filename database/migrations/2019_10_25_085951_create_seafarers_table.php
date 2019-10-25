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
            $table->string('photo')->nullable();
            $table->string('email')->nullable()->unique();
            $table->string('phone')->nullable();
            $table->string('location')->nullable();
            $table->string('name')->nullable();
            $table->string('gender')->nullable();
            $table->string('dob')->nullable();
            $table->integer('citizenship')->nullable();
            $table->string('rank')->nullable();
            $table->string('additional_rank1')->nullable();
            $table->string('additional_rank2')->nullable();
            $table->string('contact_phone')->nullable();
            $table->string('contact_email')->nullable();
            $table->integer('address_country_id')->nullable();
            $table->string('address_city')->nullable();
            $table->integer('address_zip')->nullable();
            $table->string('address_home_airport')->nullable();
            $table->string('english_level')->nullable();
            $table->string('english_certificate')->nullable();
            $table->integer('height')->nullable();
            $table->string('eye_color')->nullable();
            $table->string('boiler_suit_size')->nullable();
            $table->integer('weight')->nullable();
            $table->string('hair_color')->nullable();
            $table->string('boot_size')->nullable();
            $table->string('resume_file')->nullable();
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
