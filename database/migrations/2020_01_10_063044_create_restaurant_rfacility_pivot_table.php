<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRestaurantRfacilityPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurant_rfacility', function (Blueprint $table) {
            $table->unsignedBigInteger('restaurant_id')->unsigned()->index();
            $table->foreign('restaurant_id')->references('id')->on('restaurant')->onDelete('cascade');
            $table->unsignedBigInteger('rfacility_id')->unsigned()->index();
            $table->foreign('rfacility_id')->references('id')->on('rfacilities')->onDelete('cascade');
            $table->primary(['restaurant_id', 'rfacility_id']);

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
        Schema::dropIfExists('restaurant_rfacility');
    }
}
