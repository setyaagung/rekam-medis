<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePemeriksaanMataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemeriksaan_mata', function (Blueprint $table) {
            $table->bigIncrements('id_pm');
            $table->unsignedBigInteger('id_rm');
            $table->string('jarak_mata_kanan_tanpa_kacamata')->nullable();
            $table->string('jarak_mata_kiri_tanpa_kacamata')->nullable();
            $table->string('jarak_mata_kanan_dengan_kacamata')->nullable();
            $table->string('jarak_mata_kiri_dengan_kacamata')->nullable();
            $table->string('buta_warna');
            $table->string('normal_colour_test')->nullable();
            $table->string('lapang_pandang');
            $table->string('mata_lain')->nullable();
            $table->text('catatan_penglihatan')->nullable();
            $table->string('alat_bantu_penglihatan');
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
        Schema::dropIfExists('pemeriksaan_mata');
    }
}
