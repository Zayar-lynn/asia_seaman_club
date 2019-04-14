<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_posts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('company_id');
            $table->string('rank');
            $table->string('salary');
            $table->string('contract_time');
            $table->string('vessel_name');
            $table->integer('shiptype_id');
            $table->string('grt');
            $table->string('flag_of_vessel');
            $table->string('navigation_area');
            $table->string('request_certificates');
            $table->text('description');
            $table->string('english_level');
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
        Schema::dropIfExists('job_posts');
    }
}
