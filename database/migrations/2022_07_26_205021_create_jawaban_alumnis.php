<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJawabanAlumnis extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jawaban_alumnis', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_alumni');
            $table->foreign('id_alumni')->references('id')->on('alumnis');
            $table->unsignedInteger('id_pertanyaan');
            $table->foreign('id_pertanyaan')->references('id')->on('kuisioner_alumnis');
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
        Schema::dropIfExists('jawaban_alumnis');
    }
}
