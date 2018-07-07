<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTourTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tour', function (Blueprint $table) {

            $table->increments('id');
            $table->string('title');
            $table->text('description');
            $table->string('media');
            $table->dateTime('start_time');
            $table->dateTime('end_time');
            $table->integer('capacity')->unsigned();
            $table->integer('price')->unsigned();
            $table->enum('status',['ENABLE','DISABLE']);
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
        Schema::dropIfExists('tour');
    }
}
