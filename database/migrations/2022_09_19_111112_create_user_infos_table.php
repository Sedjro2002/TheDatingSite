<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_infos', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->foreignId("users_id")->constrained();
            $table->string('firstname');

            $table->string('lastname');

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
        Schema::dropIfExists('user_infos');
    }
}
