<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserPerusahaansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_perusahaan', function (Blueprint $table) {
            $table->string('ID_user', 4);
            $table->string('username', 10);
            $table->integer('password');
            $table->string('status', 30);

            $table->primary('ID_user');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_perusahaan');
    }
}
