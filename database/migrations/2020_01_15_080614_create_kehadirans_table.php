<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKehadiransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kehadirans', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('kelaseskul_id')->unsigned();
            $table->integer('siswa_id')->unsigned();
            $table->integer('semester_id')->unsigned();
            $table->integer('absen');
            $table->timestamps();

            $table->foreign('kelaseskul_id')->references('id')->on('kelaseskuls');
            $table->foreign('siswa_id')->references('id')->on('users');
            $table->foreign('semester_id')->references('id')->on('semesters');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kehadirans');
    }
}
