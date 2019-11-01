<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKelaseskulsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kelaseskul', function (Blueprint $table) {
            $table->bigIncrements('id_kelas_eskul');
            $table->integer('id_siswa');
            $table->integer('id_eskul');
            $table->timestamps();

            // $table->foreign('id_siswa')
            //         ->references('id_siswa')
            //         ->on('siswa')
            //         ->onDelete('cascade');
            
            // $table->foreign('id_eskul')
            //         ->references('id_eskul')
            //         ->on('ekstrakurikuler')
            //         ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kelaseskul');
    }
}
