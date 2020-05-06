<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHasilTkpbasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hasil_tkpba', function (Blueprint $table) {
            $table->string('ID_hasil', 4);
            $table->string('ID_konfirmasi', 4);
            $table->integer('nilai');
            $table->string('status_tkpba', 10);

            $table->primary('ID_hasil');
            $table->foreign('ID_konfirmasi')->references('ID_konfirmasi')->on('konfirmasi_tkpba');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hasil_tkpba');
    }
}
