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
        Schema::table('job_postings', function (Blueprint $table) {
            $table->string('skill')->after('experience');
            $table->integer('max_salary')->after('skill');
            $table->integer('min_salary')->after('max_salary');
            $table->integer('vacancy')->after('min_salary');
            $table->string('experience_details')->after('vacancy');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('job_postings', function (Blueprint $table) {
            //
        });
    }
};
