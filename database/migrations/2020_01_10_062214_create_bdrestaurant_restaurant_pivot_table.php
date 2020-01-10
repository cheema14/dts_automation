<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBdrestaurantRestaurantPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bdrestaurant_restaurant', function (Blueprint $table) {
            $table->unsignedBigInteger('bdrestaurant_id')->unsigned()->index();
            $table->foreign('bdrestaurant_id')->references('id')->on('bdrestaurants')->onDelete('cascade');
            $table->unsignedBigInteger('restaurant_id')->unsigned()->index();
            $table->foreign('restaurant_id')->references('id')->on('restaurant')->onDelete('cascade');
            $table->primary(['bdrestaurant_id', 'restaurant_id']);

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
        Schema::dropIfExists('bdrestaurant_restaurant');
    }
}
