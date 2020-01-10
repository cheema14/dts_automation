<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('hotels', function (Blueprint $table) {
            $table->bigIncrements('id')->autoIncrement();
            $table->string('hotel_name');
            $table->year('establishment_year');
            $table->boolean('hotel_commissioned');
            $table->text('address');
            $table->decimal('lat',10,7);
            $table->decimal('long',10,7);
            $table->unsignedMediumInteger('contact_no');
            $table->string('district_idFk');
            $table->string('tehsil_idFk');
            $table->integer('ntn_no');
            $table->longText('ntn_certificate');
            $table->integer('pra_no');
            $table->longText('pra_certificate');
            $table->string('official_email');
            
            //$table->unsignedBigInteger('business_idFk');
            // 'business_details' is the table name where business details are stored 
            //$table->foreign('business_idFk')->references('id')->on('business_detail_hotel')->onDelete('cascade');

            
            // Storing Manager's Personal information
            $table->string('manager_name');
            $table->unsignedMediumInteger('cnic');
            $table->string('manager_father_name');
            $table->text('manager_address');
            $table->unsignedMediumInteger('manager_contact_no');

            // Storing information regarding Land
            $table->unsignedDecimal('hotel_area');
            $table->unsignedDecimal('hotel_covered_area');
            $table->string('hotel_land_ownership');

            //Storing costs information
            $table->integer('land_cost');
            $table->integer('building_cost');
            $table->integer('furniture_cost');
            $table->integer('lease_mortgage_cost');
            $table->integer('working_capital');
            $table->integer('total_investment');

            //Storing building information
            $table->integer('number_of_floors');
            $table->integer('number_of_rooms');
            $table->integer('total_single_bed');
            $table->integer('total_double_bed');
            $table->integer('total_suites');
            $table->string('other_rooms');
            $table->integer('rooms_with_baths');
            $table->integer('rooms_without_baths');

            //Storing public rooms information
            $table->integer('floor_name');
            $table->string('room_details');
            $table->unsignedDecimal('room_area');
            $table->integer('common_bathrooms');
            $table->integer('common_toilets');
            $table->integer('no_staircases');
            $table->integer('no_lifts');
            $table->unsignedDecimal('car_park');
            $table->unsignedDecimal('compound_area');
            $table->date('construction_date');
            $table->date('renovation_date');

            //Storing facilities details
            // $table->unsignedBigInteger('facility_idFk');
            // $table->foreign('facility_idFk')->references('id')->on('business_detail_hotel');

            //Storing guest class
            $table->string('guest_class');

            //Storing peak season
            $table->string('peak_season');

            // Storing classification - Starts
            $table->enum('classification', ['1 Start', '2 Star','3 Star','4 Star',
                                            '5 Star','6 Star','7 Star']);
                                            
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
        Schema::dropIfExists('hotels');
    }
}
