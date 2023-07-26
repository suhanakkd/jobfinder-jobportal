<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddHigherUserIdToJobPostings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('job_postings', function (Blueprint $table) {
            $table->integer('user_id')->after('id');
            $table->integer('firm_id')->after('user_id');
            $table->string('firm_description')->after('firm_id');
            $table->string('email_id')->after('firm_description');
            $table->string('job_description')->after('email_id');
            $table->string('higher_qualification')->after('job_description');
            $table->string('mob_num')->after('higher_qualification');
            $table->date('posting_date')->after('mob_num');
            $table->date('last_date')->after('posting_date');
            $table->string('experience')->after('last_date');
            
            $table->string('rate')->after('experience');
            $table->integer('job_category_id')->after('rate');
            $table->integer('business_stream_id')->after('job_category_id');

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
}
