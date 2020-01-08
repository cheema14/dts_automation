<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBusinessDetailHotelPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('business_detail_hotel', function (Blueprint $table) {
            $table->unsignedBigInteger('business_detail_id')->unsigned()->index();
            $table->foreign('business_detail_id')->references('id')->on('business_details')->onDelete('cascade');
            $table->unsignedInteger('hotel_id')->unsigned()->index();
            $table->foreign('hotel_id')->references('id')->on('hotels')->onDelete('cascade');
            $table->primary(['business_detail_id', 'hotel_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('business_detail_hotel');
    }
}
