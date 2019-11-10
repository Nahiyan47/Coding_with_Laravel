<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFlightcodes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flightcodes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('flight_id')->unsigned();
            $table->string('code');
            $table->string('owner_name');
            $table->string('issuedate');
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
        Schema::dropIfExists('flightcodes');
    }
}
