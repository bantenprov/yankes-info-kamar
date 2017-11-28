<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKelasrawatinapTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kelas_rawat_inap', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_rs')->unsigned();
            $table->foreign('id_rs')
              ->references('id')
              ->on('rumahsakits')
              ->onDelete('cascade');
            $table->integer('created_by');
            $table->string('kode_kelas');
            $table->string('nama_kelas');
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
        Schema::dropIfExists('kelas_rawat_inap');
    }
}
