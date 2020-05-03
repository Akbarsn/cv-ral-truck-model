<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserCalonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_calon', function (Blueprint $table) {
            $table->string('ID_calon', 4);
            $table->string('username',10);
            $table->integer('password');
            $table->string('nama', 50);
            $table->string('no_telepon', 20);
            $table->string('alamat', 50);
            $table->string('posisi_lamaran', 50);
            $table->date('tanggal_lahir');
            $table->integer('no_ktp');
            $table->string('jenis_kelamin', 10);
            $table->string('agama', 10);
            $table->string('pendidikan_terakhir', 10);
            $table->integer('pengalaman_kerja');

            $table->primary('ID_calon');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_calon');
    }
}
