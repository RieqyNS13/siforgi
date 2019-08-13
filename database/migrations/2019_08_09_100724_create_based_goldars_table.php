<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBasedGoldarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('based_goldars', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('rukun_tetangga_id');
            $table->unsignedBigInteger('goldar_id');
            $table->enum('gender',['L','P']);
            $table->integer('jumlah');
            $table->timestamps();

            $table->foreign('rukun_tetangga_id')->references('id')->on('rukun_tetanggas')->onDelete('cascade');
            $table->foreign('goldar_id')->references('id')->on('goldars')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('based_goldars');
    }
}
