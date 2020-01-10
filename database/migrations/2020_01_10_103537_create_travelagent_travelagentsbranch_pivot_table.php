<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTravelagentTravelagentsbranchPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travelagent_travelagentsbranch', function (Blueprint $table) {
            $table->unsignedBigInteger('travelagent_id')->unsigned()->index();
            $table->foreign('travelagent_id')->references('id')->on('travelagents')->onDelete('cascade');
            $table->unsignedBigInteger('travelagentsbranch_id')->unsigned()->index();
            $table->foreign('travelagentsbranch_id')->references('id')->on('travelagentsbranches')->onDelete('cascade');
            //$table->primary(['travelagent_id', 'travelagentsbranch_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('travelagent_travelagentsbranch');
    }
}
