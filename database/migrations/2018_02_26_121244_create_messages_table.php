<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->increments('id_user1');
            $table->foreign('id_user1')->references('id')->on('user');
            $table->increments('id_user2');
            $table->foreign('id_user2')->references('id')->on('user');
            $table->timestamps();
            $table->dateTime('date_message');
            $table->longText('contenu');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('messages');
    }
}
