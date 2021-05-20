<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePemeriksaanFisikTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemeriksaan_fisik', function (Blueprint $table) {
            $table->bigIncrements('id_pf');
            $table->unsignedBigInteger('id_rm');
            $table->integer('berat_badan')->nullable();
            $table->integer('tinggi_badan')->nullable();
            $table->string('tekanan_darah')->nullable();
            $table->string('denyut_nadi')->nullable();
            $table->string('pernapasan')->nullable();
            $table->string('kepala_leher');
            $table->string('dada');
            $table->string('jantung');
            $table->string('paru');
            $table->string('perut');
            $table->string('hati');
            $table->string('limpa');
            $table->string('gerak');
            $table->string('fisik_lain');
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
        Schema::dropIfExists('pemeriksaan_fisik');
    }
}
