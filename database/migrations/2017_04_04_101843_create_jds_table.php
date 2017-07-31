<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jds', function (Blueprint $table) {
            $table->increments('id');
            $table->string('role');
            $table->string('company');
            $table->string('resp');
            $table->string('qual');
            $table->string('skill');
             $table->string('sector');
              $table->string('deadline');
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
        Schema::dropIfExists('jds');
    }
}
