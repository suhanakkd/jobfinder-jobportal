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
        Schema::create('experience', function (Blueprint $table) {
            $table->id();
            $table->integer('accont_id');
            $table->string('designation');
            $table->date('start_date');
            $table->date('end_date');
            $table->integer('job_catogory_id');
            $table->integer('sub_category_id');
            $table->string('completion_date');
            $table->string('company_name');
            $table->integer('state_id');
            $table->integer('district_id');
            $table->decimal('package',8,2)->nullable();
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
        Schema::dropIfExists('experience');
    }
};
