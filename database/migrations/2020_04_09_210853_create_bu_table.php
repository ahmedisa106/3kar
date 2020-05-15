<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bu', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('name');
            $table->string('image');
            $table->string('place');
            $table->integer('rooms');
            $table->integer('price');
            $table->integer('rent');
            $table->string('square');
            $table->integer('type');
            $table->string('small_desc')->nullable();
            $table->longText('large_desc')->nullable();
            $table->string('meta');
            $table->bigInteger('longitude');
            $table->bigInteger('latitude');
            $table->integer('status')->default(0);
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('bu');
    }
}
