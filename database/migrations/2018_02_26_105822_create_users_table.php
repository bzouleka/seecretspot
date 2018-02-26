<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id_user');
            $table->timestamps();
            $table->string('user_name');
            $table->string('email');
            $table->string('first_name');
            $table->string('last_name');
            $table->date('date_of_birth');
            $table->text('description');
            $table->string('sex');
            $table->string('country');
            $table->string('city');
            $table->string('phone');
            $table->string('password');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
