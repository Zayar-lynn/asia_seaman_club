<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrainingPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('training_posts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('company_id');
//            $table->foreign('company_id')->references('id')->on('companies');
            $table->text('title')->nullable();
            $table->text('description')->nullable();
            $table->text('training_for')->nullable();
            $table->text('requirement')->nullable();
            $table->text('duration')->nullable();
            $table->string('photo')->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->string('start_time')->nullable();
            $table->string('end_time')->nullable();
            $table->string('training_fee_amount')->nullable();
            $table->string('fee_type')->nullable();
            $table->string('enroll_limit')->nullable();
            $table->string('contact_no')->nullable();
            $table->string('online_banking')->nullable();
            $table->string('benificiary_name')->nullable();
            $table->string('account_number')->nullable();
            $table->string('post_start_date')->nullable();
            $table->string('post_end_date')->nullable();
            $table->string('fee_point')->nullable();
            $table->string('status')->nullable()->default('pending');
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
        Schema::dropIfExists('training_posts');
    }
}
