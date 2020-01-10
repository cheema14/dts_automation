<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterMigrationTimestamps extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('business_detail_hotel', function (Blueprint $table) {
            $table->timestamps();
        });

        Schema::table('cuisine_hotel', function (Blueprint $table) {
            $table->timestamps();
        });

        Schema::table('facility_hotel', function (Blueprint $table) {
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
        //
    }
}
