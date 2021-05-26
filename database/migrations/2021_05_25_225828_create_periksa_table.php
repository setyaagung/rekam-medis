<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeriksaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('periksa', function (Blueprint $table) {
            $table->bigIncrements('id_periksa');
            $table->unsignedBigInteger('id_taruna');
            $table->unsignedBigInteger('id_dokter');
            $table->date('tanggal_periksa');
            $table->text('keluhan');
            $table->text('tindakan');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('id_taruna')->references('id_taruna')->on('taruna')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('periksa');
    }
}
