<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeaServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sea_services', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('seafarer_id');
            $table->string('vessel_name');
            $table->integer('imo_number');
            $table->integer('vessel_type');
            $table->string('flag');
            $table->string('sign_on_date');
            $table->string('sign_off_date');
            $table->string('sign_off_reason');
            $table->string('crewing_company_name');
            $table->string('crewing_name');
            $table->string('crewing_email');
            $table->string('crewing_phone');
            $table->string('seaservice_confirm_photo');
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
        Schema::dropIfExists('sea_services');
    }
}
