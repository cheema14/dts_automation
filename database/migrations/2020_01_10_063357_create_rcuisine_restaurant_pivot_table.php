<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRcuisineRestaurantPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rcuisine_restaurant', function (Blueprint $table) {
            $table->unsignedBigInteger('rcuisine_id')->unsigned()->index();
            $table->foreign('rcuisine_id')->references('id')->on('rcuisine')->onDelete('cascade');
            $table->unsignedBigInteger('restaurant_id')->unsigned()->index();
            $table->foreign('restaurant_id')->references('id')->on('restaurant')->onDelete('cascade');
            $table->primary(['rcuisine_id', 'restaurant_id']);

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
        Schema::dropIfExists('rcuisine_restaurant');
    }
}
