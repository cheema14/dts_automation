<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableTouristGuides extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TouristGuides', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->unsignedMediumInteger('cnic');
            $table->text('residential_address');
            $table->text('business_address');
            $table->integer('district_idFk');
            $table->integer('tehsil_idFk');
            $table->year('establishment_year');
            $table->unsignedMediumInteger('phone_no');
            $table->unsignedMediumInteger('residential_phone_no')->nullable();
            $table->string('manager_qualification');
            $table->decimal('experience_years');
            $table->string('foreign_language_knowledge');
            $table->longText('foreign_language_certificate'); // A path to a file
            $table->string('training')->nullable();
            $table->longText('training_certificate')->nullable(); // A path to a file
            $table->longText('self_picture'); // A path to a file
            $table->longText('inter_certificate'); // A path to a file

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
        Schema::dropIfExists('TouristGuides');
    }
}
