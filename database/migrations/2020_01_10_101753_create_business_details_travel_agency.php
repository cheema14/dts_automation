<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusinessDetailsTravelAgency extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bdTravelAgents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('owner_title')->nullable();
            $table->string('father_name');
            $table->unsignedMediumInteger('cnic');
            $table->unsignedMediumInteger('contact_no');
            $table->enum('business_type',['Sole proprietorship','Partnership','Private Limited']);
            $table->text('address');
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
        Schema::dropIfExists('bdTravelAgents');
    }
}
