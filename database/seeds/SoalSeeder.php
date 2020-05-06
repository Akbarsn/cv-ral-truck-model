<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SoalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('soal_tkpba')->insert([
            'ID_soal' => 'S001',
            'data_soal' => '/soal/soal1.docx',
            'jawaban_soal' => '/soal/kunci1.docx'
        ]);
        DB::table('soal_tkpba')->insert([
            'ID_soal' => 'S002',
            'data_soal' => '/soal/soal2.docx',
            'jawaban_soal' => '/soal/kunci2.docx'
        ]);
        DB::table('soal_tkpba')->insert([
            'ID_soal' => 'S003',
            'data_soal' => '/soal/soal3.docx',
            'jawaban_soal' => '/soal/kunci3.docx'
        ]);
    }
}
