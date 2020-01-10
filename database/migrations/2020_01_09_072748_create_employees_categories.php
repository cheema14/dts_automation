<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesCategories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees_summary', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('employee_category');
            $table->integer('total');
            $table->integer('professionally_trained');
            $table->integer('not_professionally_experienced');
            $table->integer('english_knowing');
            
            //Which hotel it belongs to
            $table->unsignedBigInteger('hotel_idFk');
            $table->foreign('hotel_idFk')->references('id')->on('hotels')->onDelete('cascade');
            

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
        Schema::dropIfExists('employees_summary');
    }
}
