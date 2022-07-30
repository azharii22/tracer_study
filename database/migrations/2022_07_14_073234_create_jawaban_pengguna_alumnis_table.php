<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJawabanPenggunaAlumnisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jawaban_pengguna_alumnis', function (Blueprint $table) {
            $table->increments('id');
            $table->UnsignedInteger('id_user');
            $table->foreign('id_user')->references('id')->on('pengguna_alumnis');
            $table->UnsignedInteger('id_pertanyaan');
            $table->foreign('id_pertanyaan')->references('id')->on('kuisioner_pengguna_alumnis');
            $table->string('jawaban');
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
        Schema::dropIfExists('jawaban_pengguna_alumnis');
    }
}
