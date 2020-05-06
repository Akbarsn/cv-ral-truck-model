<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenerimaansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penerimaan', function (Blueprint $table) {
            $table->string('ID_penerimaan', 4);
            $table->string('ID_rekapitulasi', 4);
            $table->string('ID_calon', 4);
            $table->string('posisi_lamaran', 50);

            $table->primary('ID_penerimaan');
            $table->foreign('ID_rekapitulasi')->references('ID_rekapitulasi')->on('rekapitulasi_penilaian');
            $table->foreign('ID_calon')->references('ID_calon')->on('user_calon');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penerimaan');
    }
}
