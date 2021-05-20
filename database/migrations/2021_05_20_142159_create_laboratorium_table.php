<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLaboratoriumTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laboratorium', function (Blueprint $table) {
            $table->bigIncrements('id_lab');
            $table->unsignedBigInteger('id_rm');
            $table->string('urine_albumin')->nullable();
            $table->string('urine_reduksi')->nullable();
            $table->string('urine_bilirubin')->nullable();
            $table->string('urine_sedimen')->nullable();
            $table->string('urine_kehamilan')->nullable();
            $table->string('urine_ph')->nullable();
            $table->string('urine_bj')->nullable();
            $table->string('urine_lekosite')->nullable();
            $table->string('led')->nullable();
            $table->string('hb')->nullable();
            $table->string('lekosit')->nullable();
            $table->string('hitung_jenis')->nullable();
            $table->string('trombosite')->nullable();
            $table->string('gula_darah')->nullable();
            $table->string('n')->nullable();
            $table->string('pp')->nullable();
            $table->string('vdrl')->nullable();
            $table->string('sgot')->nullable();
            $table->string('sgpt')->nullable();
            $table->string('kreatinin')->nullable();
            $table->string('ureum')->nullable();
            $table->string('kolesterol')->nullable();
            $table->string('trigiliserid')->nullable();
            $table->string('uric_acid')->nullable();
            $table->string('hbsag')->nullable();
            $table->string('hbeag')->nullable();
            $table->string('temuan_lab');
            $table->text('gambar_kelainan')->nullable();
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
        Schema::dropIfExists('laboratorium');
    }
}
