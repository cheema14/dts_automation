<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFacilityHotelPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facility_hotel', function (Blueprint $table) {
            $table->unsignedBigInteger('facility_id')->unsigned()->index();
            $table->foreign('facility_id')->references('id')->on('facilities')->onDelete('cascade');
            $table->unsignedBigInteger('hotel_id')->unsigned()->index();
            $table->foreign('hotel_id')->references('id')->on('hotels')->onDelete('cascade');
            $table->primary(['facility_id', 'hotel_id']);
            $table->string('facility_charges');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('facility_hotel');
    }
}
