<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTempattidurTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tempat_tidur', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ruang_id')->unsigned();
            $table->foreign('ruang_id')->references('id')->on('ruang_rawat_inap')->onDelete('cascade');
            $table->string('kode_bed');
            $table->integer('status');
            $table->softDeletes();
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
        Schema::dropIfExists('tempat_tidur');
    }
}
