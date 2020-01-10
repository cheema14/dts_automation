<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::table('facility_hotel', function (Blueprint $table) {
        //     $table->string('facility_charges')->after('hotel_id');
        // });

        Schema::table('business_detail_hotel', function (Blueprint $table) {
            $table->timestamps()->after('hotel_id');
        });

        Schema::table('cuisine_hotel', function (Blueprint $table) {
            $table->timestamps()->after('hotel_id');
        });

        Schema::table('facility_hotel', function (Blueprint $table) {
            $table->timestamps()->after('facility_charges');
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
