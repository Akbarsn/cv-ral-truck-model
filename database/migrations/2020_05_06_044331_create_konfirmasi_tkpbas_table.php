<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKonfirmasiTkpbasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('konfirmasi_tkpba', function (Blueprint $table) {
        $table->string('ID_konfirmasi', 4);
        $table->string('ID_user', 4)->default('-');
        $table->string('ID_tes', 4);
        $table->string('jawaban_soal');

        $table->primary('ID_konfirmasi');
        $table->foreign('ID_user')->references('ID_user')->on('user_perusahaan');
        $table->foreign('ID_tes')->references('ID_tes')->on('tes_tkpba');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('konfirmasi_tkpba');
    }
}
