<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fed', function (Blueprint $table) {
            $table->id();
	    $table->unsignedBigInteger('food');
	    $table->unsignedBigInteger('feeding');
	    $table->unsignedInteger('ducks');
	    $table->unsignedInteger('count');
	    $table->foreign('food')->references('id')->on('food');
	    $table->foreign('feeding')->references('id')->on('feeding');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fed');
    }
}
