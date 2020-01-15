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
            $table->bigIncrements('id');
            $table->unsignedBigInteger('siswa_id');
            $table->unsignedBigInteger('eskul_id');
            $table->timestamps();

            $table->foreign('siswa_id')
                    ->references('id')
                    ->on('users');
            
            $table->foreign('eskul_id')
                    ->references('id')
                    ->on('ekstrakurikuler');
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
