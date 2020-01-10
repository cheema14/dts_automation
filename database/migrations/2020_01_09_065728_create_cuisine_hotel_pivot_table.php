<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCuisineHotelPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuisine_hotel', function (Blueprint $table) {
            $table->unsignedBigInteger('cuisine_id')->unsigned()->index();
            $table->foreign('cuisine_id')->references('id')->on('cuisine')->onDelete('cascade');
            $table->unsignedBigInteger('hotel_id')->unsigned()->index();
            $table->foreign('hotel_id')->references('id')->on('hotels')->onDelete('cascade');
            $table->primary(['cuisine_id', 'hotel_id']);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cuisine_hotel');
    }
}
