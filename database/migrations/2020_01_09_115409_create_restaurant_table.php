<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestaurantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurant', function (Blueprint $table) {
            $table->bigIncrements('id')->autoIncrement();

            $table->string('restaurant_name');
            $table->year('establishment_year');
            $table->boolean('hotel_commissioned');
            $table->text('address');
            $table->decimal('lat',10,7);
            $table->decimal('long',10,7);
            $table->unsignedMediumInteger('contact_no');
            $table->integer('district_idFk');
            $table->integer('tehsil_idFk');
            $table->integer('ntn_no');
            $table->longText('ntn_certificate');
            $table->integer('pra_no');
            $table->longText('pra_certificate');
            $table->string('official_email');
            $table->string('head_email');

            // Storing Manager's Personal information
            $table->string('manager_name');
            $table->string('manager_father_name');
            $table->text('manager_address');
            $table->unsignedMediumInteger('manager_contact_no');

            // Storing information regarding Area
            $table->unsignedDecimal('restaurant_area');
            $table->unsignedDecimal('kitchen_are');
            $table->unsignedDecimal('pantry_area');
            $table->unsignedDecimal('dinning_area');

            //Storing costs information
            $table->integer('furniture_cost');
            $table->integer('equipment_cost');
            $table->integer('annual_rent_cost');
            $table->integer('total_investment_cost');

            //Storing furniture and other details
            $table->longText('furniture_details');

            //Storing guest information
            $table->string('guests_class');

            //Storing peak season
            $table->string('peak_season');

            //Storing rates
            $table->date('rates_charging_date');



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
        Schema::dropIfExists('restaurant');
    }
}
