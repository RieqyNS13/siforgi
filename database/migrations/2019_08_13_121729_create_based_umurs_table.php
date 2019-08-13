<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBasedUmursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('based_umurs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('rukun_tetangga_id');
            $table->unsignedBigInteger('umur_id');
            $table->enum('gender',['L','P']);
            $table->integer('jumlah');
            $table->timestamps();

            $table->foreign('rukun_tetangga_id')->references('id')->on('rukun_tetanggas')->onDelete('cascade');
            $table->foreign('umur_id')->references('id')->on('umurs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('based_umurs');
    }
}
