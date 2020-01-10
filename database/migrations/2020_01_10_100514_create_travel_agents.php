<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelAgents extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TravelAgents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('travel_agency_name');
            $table->string('address');
            $table->decimal('lat',10,7);
            $table->decimal('long',10,7);
            $table->unsignedMediumInteger('contact_no');
            $table->year('establishment_year');
            $table->integer('district_idFk');
            $table->integer('tehsil_idFk');
            $table->string('pra_no');
            $table->longText('pra_certificate');
            $table->string('official_email');

            $table->integer('ntn_no');
            $table->longText('ntn_certificate');

            $table->string('bank_name');
            $table->longText('bank_reference');

            $table->string('manager_name');
            $table->string('manager_father_name');
            $table->text('manager_address');
            $table->unsignedMediumInteger('manager_contact_no');
            $table->string('manager_qualification');
            $table->integer('experience_years');

            $table->string('auditor_name');
            $table->text('auditor_address');

            $table->string('other_activities');
            $table->longText('shipping_agency');
            $table->longText('balance_sheets_path'); // This is expected to be a CSV

            $table->string('license_foreign_exchange');
            $table->longText('foreign_travel_agents_path'); // This might be a path to a file or a string "NO"
            $table->text('conviction_offence');


            $table->boolean('all_information_correct');
            $table->boolean('abide_by_check');

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
        Schema::dropIfExists('TravelAgents');
    }
}
