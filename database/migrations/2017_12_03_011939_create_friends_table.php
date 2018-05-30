<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFriendsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('friends', function(Blueprint $table){
            $table->increments('id');
            $table->integer('sender_id')->unsigned();
            $table->foreign('sender_id')->references('id')->on('users');
            $table->integer('reciever_id')->unsigned();
            $table->foreign('reciever_id')->references('id')->on('users');
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
        //
        Schema::dropIfExists('friends');
    }
}
