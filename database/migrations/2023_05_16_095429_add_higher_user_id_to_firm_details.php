<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddHigherUserIdToFirmDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('firm_details', function (Blueprint $table) {
            $table->integer('user_id')->after('id');
            $table->integer('business_stream_id')->after('user_id');
            $table->string('image')->after('business_stream_id');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('firm_details', function (Blueprint $table) {
            //
        });
    }
}
