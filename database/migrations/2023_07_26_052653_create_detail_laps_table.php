<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailLapsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_laps', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('jumlah_lap');
            $table->integer('jumlah_km');
            $table->string('parkir');
            $table->string('jenis_lap');
            $table->string('peraturan');
            $table->string('wifi');
            $table->string('harga');
            $table->integer('arena_id')->foreign('arena_id')->references('id')->on('arenas');
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
        Schema::dropIfExists('detail_laps');
    }
}
