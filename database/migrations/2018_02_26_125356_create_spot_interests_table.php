<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpotInterestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spot_interests', function (Blueprint $table) {
            $table->timestamps();
            $table->integer('id_spot');
            //$table->foreign('id_spot')->references('id')->on('spots');
            $table->integer('id_interest');
            //$table->foreign('id_interest')->references('id')->on('interests');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('spot_interests');
    }
}
