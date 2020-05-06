<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SoalTkpba extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('soal_tkpba', function (Blueprint $table) {
            $table->string('ID_soal', 4);
            $table->string('data_soal');
            $table->string('jawaban_soal');

            $table->primary('ID_soal');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('soal_tkpba');
    }
}
