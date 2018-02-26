<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->timestamps();
            $table->integer('id_user');
            $table->integer('id_spot');
            $table->text('content');
            $table->foreign('id_user')->references('id_user')->on('users');
            $table->foreign('id_spot')->references('id_spot')->on('spots');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
