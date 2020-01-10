<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBdtravelagentTravelagentPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bdtravelagent_travelagent', function (Blueprint $table) {
            $table->unsignedBigInteger('bdtravelagent_id')->unsigned()->index();
            $table->foreign('bdtravelagent_id')->references('id')->on('bdtravelagents')->onDelete('cascade');
            $table->unsignedBigInteger('travelagent_id')->unsigned()->index();
            $table->foreign('travelagent_id')->references('id')->on('travelagents')->onDelete('cascade');
            //$table->primary(['bdtravelagent_id', 'travelagent_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bdtravelagent_travelagent');
    }
}
