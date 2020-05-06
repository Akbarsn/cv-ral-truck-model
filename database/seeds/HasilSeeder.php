<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class HasilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hasil_tkpba')->insert([
            'ID_hasil' => 'H001',
            'ID_konfirmasi' => 'K001',
            'nilai' => '90',
            'status_tkpba' => 'Lulus'
        ]);
        DB::table('hasil_tkpba')->insert([
            'ID_hasil' => 'H002',
            'ID_konfirmasi' => 'K002',
            'nilai' => '80',
            'status_tkpba' => 'Lulus'
        ]);
        DB::table('hasil_tkpba')->insert([
            'ID_hasil' => 'H003',
            'ID_konfirmasi' => 'K003',
            'nilai' => '70',
            'status_tkpba' => 'Tidak'
        ]);
        DB::table('hasil_tkpba')->insert([
            'ID_hasil' => 'H004',
            'ID_konfirmasi' => 'K004',
            'nilai' => '80',
            'status_tkpba' => 'Lulus'
        ]);
        DB::table('hasil_tkpba')->insert([
            'ID_hasil' => 'H005',
            'ID_konfirmasi' => 'K005',
            'nilai' => '90',
            'status_tkpba' => 'Lulus'
        ]);
    }
}
