<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRekamMedisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rekam_medis', function (Blueprint $table) {
            $table->bigIncrements('id_rm');
            $table->unsignedBigInteger('id_taruna');
            $table->unsignedBigInteger('id_dokter');
            $table->string('no_rm')->unique();
            $table->unsignedBigInteger('id_sertifikat');
            $table->unsignedBigInteger('id_jabatan');
            $table->date('tanggal_ujian')->nullable();
            $table->date('masa_berlaku');
            $table->text('anamnese')->nullable();
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
        Schema::dropIfExists('rekam_medis');
    }
}
