<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePengajarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengajar', function (Blueprint $table) {
            $table->bigIncrements('id_pengajar');
            $table->unsignedInteger('guru_id');
            $table->unsignedInteger('eskul_id');
            $table->timestamps();

            // $table->foreign('guru_id')
            //         ->references('id_guru')
            //         ->on('gurueskuls');
            
            // $table->foreign('eskul_id')
            //         ->references('id_eskul')
            //         ->on('ekstrakurikuler');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengajar');
    }
}
