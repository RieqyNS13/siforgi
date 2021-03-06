<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBasedAgamasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('based_agamas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('rukun_tetangga_id');
            $table->unsignedBigInteger('agama_id');
            $table->enum('gender',['L','P']);
            $table->integer('jumlah');
            $table->timestamps();

            $table->foreign('rukun_tetangga_id')->references('id')->on('rukun_tetanggas')->onDelete('cascade');
            $table->foreign('agama_id')->references('id')->on('agamas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('based_agamas');
    }
}
