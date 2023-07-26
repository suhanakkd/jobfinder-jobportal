<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apply_now', function (Blueprint $table) {
            $table->id();
            $table->integer('user_profile_id');
            $table->integer('user_id');
            $table->integer('job_category_id');
            $table->string('upload_cv');
            $table->string('skill');
            $table->string('highest_qualification');
            $table->string('experience');
            $table->date('Apply_date');
            $table->integer('state_id');
            $table->integer('district_id');
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
        Schema::dropIfExists('apply_now');
    }
};
