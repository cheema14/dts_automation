<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelAgentsBranch extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TravelAgentsBranches', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->text('branch_address');
            $table->unsignedMediumInteger('branch_phone');
            $table->year('establishment_year');
            $table->longText('rent_deed'); //Path of a file will be stored here
            $table->text('main_branch');
            $table->longText('attach_photocopy'); // Path of a file
            
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
        Schema::dropIfExists('TravelAgentsBranches');
    }
}
