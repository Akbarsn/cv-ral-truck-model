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
            'data_soal' => 'Soal1.docx',
            'jawaban_soal' => 'Kunci1.docx'
        ]);
        DB::table('soal_tkpba')->insert([
            'ID_soal' => 'S002',
            'data_soal' => 'Soal2.docx',
            'jawaban_soal' => 'Kunci2.docx'
        ]);
        DB::table('soal_tkpba')->insert([
            'ID_soal' => 'S003',
            'data_soal' => 'Soal3.docx',
            'jawaban_soal' => 'Kunci3.docx'
        ]);
    }
}
