<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterHotelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('hotels',function (Blueprint $table){

            $table->string('guest_class');

            //Storing peak season
            $table->string('peak_season');

            // Storing classification - Starts
            $table->enum('classification', ['1 Start', '2 Star','3 Star','4 Star',
                                            '5 Star','6 Star','7 Star']);
                                            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
