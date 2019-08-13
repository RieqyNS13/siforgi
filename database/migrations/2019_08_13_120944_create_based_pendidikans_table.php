<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBasedPendidikansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('based_pendidikans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('rukun_tetangga_id');
            $table->unsignedBigInteger('pendidikan_id');
            $table->enum('gender',['L','P']);
            $table->integer('jumlah');
            $table->timestamps();

            $table->foreign('rukun_tetangga_id')->references('id')->on('rukun_tetanggas')->onDelete('cascade');
            $table->foreign('pendidikan_id')->references('id')->on('pendidikans')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('based_pendidikans');
    }
}
