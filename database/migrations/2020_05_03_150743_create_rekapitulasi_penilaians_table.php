<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRekapitulasiPenilaiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rekapitulasi_penilaian', function (Blueprint $table) {
            $table->string('ID_rekapitulasi', 4);
            $table->string('ID_calon', 4);
            $table->string('status_administrasi', 10)->default("Tunggu");
            $table->string('status_tkpba', 10)->default("Tunggu");
            $table->string('status_psikologi', 10)->default("Tunggu");
            $table->string('interview', 10)->default("Tunggu");
            $table->string('status_calon', 10)->default("Tunggu");

            $table->primary('ID_rekapitulasi');
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
        Schema::dropIfExists('rekapitulasi_penilaian');
    }
}
