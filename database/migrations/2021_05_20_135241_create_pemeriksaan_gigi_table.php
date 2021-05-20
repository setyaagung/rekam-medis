<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePemeriksaanGigiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemeriksaan_gigi', function (Blueprint $table) {
            $table->bigIncrements('id_pg');
            $table->unsignedBigInteger('id_rm');
            $table->string('infeksi_visual_mulut_gusi');
            $table->string('rencana_pencabutan')->nullable();
            $table->string('rencana_penambalan')->nullable();
            $table->string('rencana_pembersihan_karang_gigi')->nullable();
            $table->string('rencana_pembuatan_gigi_palsu')->nullable();
            $table->string('gigi_lain')->nullable();
            $table->timestamps();

            $table->foreign('id_rm')->references('id_rm')->on('rekam_medis')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pemeriksaan_gigi');
    }
}
