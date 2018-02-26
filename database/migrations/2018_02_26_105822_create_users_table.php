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
            $table->string('country');
            $table->string('password');
            $table->string('sex')->nullable()->change();
            $table->string('phone')->nullable()->change();
            $table->string('city')->nullable()->change();
            $table->string('description')->nullable()->change();
            $table->string('date_of birth')->nullable()->change();

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
