<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTarunaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taruna', function (Blueprint $table) {
            $table->bigIncrements('id_taruna');
            $table->string('nit')->unique();
            $table->string('nama_taruna');
            $table->unsignedBigInteger('id_jurusan');
            $table->string('no_telp')->nullable();
            $table->text('alamat')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('taruna');
    }
}
