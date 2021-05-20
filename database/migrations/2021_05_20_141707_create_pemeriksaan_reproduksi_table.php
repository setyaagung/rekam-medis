<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePemeriksaanReproduksiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemeriksaan_reproduksi', function (Blueprint $table) {
            $table->bigIncrements('id_pr');
            $table->unsignedBigInteger('id_rm');
            $table->string('kelamin_luar')->nullable();
            $table->string('kandungan')->nullable();
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
        Schema::dropIfExists('pemeriksaan_reproduksis');
    }
}
