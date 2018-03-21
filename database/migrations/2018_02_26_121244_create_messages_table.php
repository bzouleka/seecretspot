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
            $table->integer('id_user1')->unsigned();
            $table->foreign('id_user1')->references('id')->on('users');
            $table->integer('id_user2')->unsigned();
            $table->foreign('id_user2')->references('id')->on('users');
            $table->timestamps();
            $table->text('contenu');
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
