<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePertanyaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pertanyaan', function (Blueprint $table) {
            $table->integer('id');
            $table->string('judul', 45);
            $table->string('isi', 255);
            $table->date('tanggal_dibuat');
            $table->integer('profil_id');
            $table->integer('jawaban_tepat_id');
            $table->foreign('profil_id')->references('id')->on('profil');
            $table->date('tanggal_diperbaharui');
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
        Schema::dropIfExists('pertanyaan');
    }
}
