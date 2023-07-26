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
        Schema::create('educational_details', function (Blueprint $table) {
            $table->id();
            $table->integer('accont_id');
            $table->string('degree_id');
            $table->string('stream_id');
            $table->string('university_id');
            $table->string('starting_date');
            $table->string('completion_date');
            $table->decimal('percentage',8,2);
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
        Schema::dropIfExists('educational_details');
    }
};
