<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMemberTourTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member_tour', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('member_id')->unsigned();
            $table->foreign('member_id')->references('id')->on('member')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('tour_id')->unsigned();
            $table->foreign('tour_id')->references('id')->on('tour')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();

            $table->unique(['member_id','tour_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('member_tour');
    }
}
