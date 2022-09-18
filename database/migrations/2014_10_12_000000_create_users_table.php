<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('email')->unique();
            $table->boolean('sex');
            $table->longText('description');
            $table->integer('choice1');
            $table->integer('choice2');
            $table->integer('choice3');
            $table->integer('choice4');
            $table->integer('choice5');
            $table->integer('choice6');
            $table->integer('choice7');
            $table->integer('choice8');
            $table->integer('choice9');
            $table->integer('choice10');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
