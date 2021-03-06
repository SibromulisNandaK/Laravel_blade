<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJawabanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jawaban', function (Blueprint $table) {
            $table->integer('id');
            $table->string('isi', 255);
            $table->date('tanggal_dibuat');
            $table->date('tanggal_diperbaharui');
            $table->integer('pertanyaan_id');
            $table->integer('profil_id');
            $table->foreign('profil_id')->references('id')->on('profil');
            $table->foreign('pertanyaan_id')->references('id')->on('pertanyaan');
            $table->primary('id');
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
        Schema::dropIfExists('jawaban');
    }
}
