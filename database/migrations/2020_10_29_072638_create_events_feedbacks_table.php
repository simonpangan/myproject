<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsFeedbacksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events_user', function (Blueprint $table) {

            $table->increments('events_userid');
          
            $table->integer('userid')->unsigned();
            $table->integer('eventid')->unsigned();
            
            
            $table->foreign('userid')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('eventid')->references('id')->on('posts')->onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events_feedbacks');
    }
}
