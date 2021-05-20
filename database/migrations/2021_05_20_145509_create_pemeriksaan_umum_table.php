<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePemeriksaanUmumTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemeriksaan_umum', function (Blueprint $table) {
            $table->bigIncrements('id_pu');
            $table->unsignedBigInteger('id_rm');
            $table->string('spirometri');
            $table->string('istirahat')->nullable();
            $table->string('mst')->nullable();
            $table->string('thorax')->nullable();
            $table->string('tulang_panjang')->nullable();
            $table->string('psikologis');
            $table->string('toleransi_oksigen')->nullable();
            $table->string('cara_bicara_tidak_terganggu');
            $table->string('menderita_penyakit');
            $table->text('deskripsi_menderita_penyakit')->nullable();
            $table->string('mengonsumsi_obat');
            $table->text('deskripsi_tanpa_obat')->nullable();
            $table->string('sehat_untuk_jaga');
            $table->text('deskripsi_sehat')->nullable();
            $table->text('catatan_kesehatan')->nullable();
            $table->string('kesimpulan')->nullable();
            $table->text('remarks')->nullable();
            $table->text('hasil_rujukan')->nullable();
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
        Schema::dropIfExists('pemeriksaan_umum');
    }
}
