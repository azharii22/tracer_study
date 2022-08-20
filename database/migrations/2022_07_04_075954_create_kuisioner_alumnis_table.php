<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKuisionerAlumnisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kuisioner_alumnis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('pertanyaan');
            $table->unsignedInteger('id_status');
            $table->foreign('id_status')->references('id')->on('statuses');
            $table->string('jawaban_a')->nullable();
            $table->string('jawaban_b')->nullable();
            $table->string('jawaban_c')->nullable();
            $table->string('jawaban_d')->nullable();
            $table->string('jawaban_e')->nullable();
            $table->string('jawaban_f')->nullable();
            $table->string('jawaban_g')->nullable();
            $table->string('jawaban_h')->nullable();
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
        Schema::dropIfExists('kuisioner_alumnis');
    }
}
