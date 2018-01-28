<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('votes', function (Blueprint $table) {
            $table->increments('id');
            
            $table->float('score'); // (0,1) or (0..1) or (-1..+1)
            $table->integer('round'); // 1,2,3,..
            
            $table->integer('election_id')->unsigned(); // Which election was voted?
            $table->foreign('election_id')->references('id')->on('elections');
            
            $table->integer('user_id')->unsigned(); // Who has voted?
            $table->foreign('user_id')->references('id')->on('users');

            $table->integer('candidate_id')->unsigned(); // Who was voted? This can be a natrual person or even an abstract thing.
            $table->foreign('candidate_id')->references('id')->on('candidates');

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
        Schema::dropIfExists('votes');
    }
}
