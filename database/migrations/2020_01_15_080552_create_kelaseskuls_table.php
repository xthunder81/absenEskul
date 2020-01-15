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
        Schema::create('kelaseskuls', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('guru_id')->unsigned();
            $table->integer('eskul_id')->unsigned();
            $table->timestamps();

            $table->foreign('guru_id')->references('id')->on('guru_eskuls');
            $table->foreign('eskul_id')->references('id')->on('eskuls');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kelaseskuls');
    }
}
