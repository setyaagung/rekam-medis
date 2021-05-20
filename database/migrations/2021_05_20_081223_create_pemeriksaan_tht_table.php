<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePemeriksaanThtTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemeriksaan_tht', function (Blueprint $table) {
            $table->bigIncrements('id_pt');
            $table->unsignedBigInteger('id_rm');
            $table->string('hidung');
            $table->string('telinga');
            $table->string('tenggorokan');
            $table->string('audiogram_kiri');
            $table->string('audiogram_kanan');
            $table->string('tht_lain');
            $table->text('catatan_pendengaran')->nullable();
            $table->text('catatan_pendengaran_tanpa_alat')->nullable();
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
        Schema::dropIfExists('pemeriksaan_tht');
    }
}
