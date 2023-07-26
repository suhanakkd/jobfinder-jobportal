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
        Schema::table('users_profile', function (Blueprint $table) {
            $table->integer('job_category_id')->after('user_id');
            $table->string('upload_cv')->after('gender');
            $table->string('skill')->after('upload_cv');
            $table->string('higher_qualification')->after('skill');
            $table->date('apply_date')->after('higher_qualification');
            $table->string('experience')->after('apply_date');
            $table->integer('state_id')->after('experience');
            $table->integer('district_id')->after('state_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_profile', function (Blueprint $table) {
            //
        });
    }
};
