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
        Schema::create('job_postings', function (Blueprint $table) {
            $table->id();
            $table->integer('accont_id');
            $table->integer('job_type_id');
            $table->integer('company_id');
            $table->integer('skill_id');
            $table->string('skill_level');
            $table->integer('state_id');
            $table->integer('district_id');
            $table->decimal('salary',8,2);
            $table->string('status');
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
        Schema::dropIfExists('job_posting');
    }
};
