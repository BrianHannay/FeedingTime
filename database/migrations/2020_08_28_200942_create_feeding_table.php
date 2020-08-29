<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeedingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feeding', function (Blueprint $table) {
            $table->id();
	    $table->unsignedBigInteger('user');
	    $table->unsignedBigInteger('location');
	    $table->date('occurred');
	    $table->timestamps();
	    $table->foreign('user')->references('id')->on('users');
	    $table->foreign('location')->references('id')->on('location');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('feeding');
    }
}
