<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableApplyNow extends Migration
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
            $table->integer('user_id');
            $table->integer('job_category_id');
            $table->date('apply_date');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email_id');
            $table->string('mob_num');
            $table->integer('state_id');
            $table->integer('district_id');
            $table->string('upload_cv');
            $table->string('Highest_qualification');
            $table->string('experience');
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
        Schema::dropIfExists('table_apply_now');
    }
}
