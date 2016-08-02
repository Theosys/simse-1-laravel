<?php

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
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('i_codpersona');
            $table->integer('i_codrol')->default(1);
            $table->string('v_ubigeo')->nullable();
            $table->integer('i_usureg')->default(1);
            $table->integer('i_usumod')->default(1);
            $table->integer('i_codarchivo')->nullable();
            $table->integer('i_estreg')->nullable();
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
        Schema::drop('users');
    }
}
