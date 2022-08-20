<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvaluasiAlumnisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluasi_alumnis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('pertanyaan');
            $table->string('sangat_besar')->nullable();
            $table->string('besar')->nullable();
            $table->string('cukup')->nullable();
            $table->string('kurang')->nullable();
            $table->string('tidak_sama_sekali')->nullable();
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
        Schema::dropIfExists('evaluasi_alumnis');
    }
}
