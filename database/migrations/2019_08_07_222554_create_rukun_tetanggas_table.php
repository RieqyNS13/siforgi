<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRukunTetanggasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rukun_tetanggas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('dusun_id');
            $table->unsignedTinyInteger('rt_no');
            $table->text('description')->nullable();
            $table->timestamps();

            $table->foreign('dusun_id')->references('id')->on('dusuns')->onDelete('cascade');
    
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rukun_tetanggas');
    }
}
