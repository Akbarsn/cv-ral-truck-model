<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTesTkpbasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tes_tkpba', function (Blueprint $table) {
            $table->string('ID_tes', 4);
            $table->string('ID_soal', 4);
            $table->string('ID_calon', 4);

            $table->primary('ID_tes');
            $table->foreign('ID_soal')->references('ID_soal')->on('soal_tkpba');
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
        Schema::dropIfExists('tes_tkpba');
    }
}
