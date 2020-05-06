<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KonfirmasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('konfirmasi_tkpba')->insert([
            'ID_konfirmasi' => 'K001',
            'ID_user' => 'U003',
            'ID_tes' => 'T001',
            'jawaban_soal' => 'Jawaban1.docx'
        ]);
        DB::table('konfirmasi_tkpba')->insert([
            'ID_konfirmasi' => 'K002',
            'ID_user' => 'U003',
            'ID_tes' => 'T002',
            'jawaban_soal' => 'Jawaban2.docx'
        ]);
        DB::table('konfirmasi_tkpba')->insert([
            'ID_konfirmasi' => 'K003',
            'ID_user' => 'U003',
            'ID_tes' => 'T003',
            'jawaban_soal' => 'Jawaban3.docx'
        ]);
        DB::table('konfirmasi_tkpba')->insert([
            'ID_konfirmasi' => 'K004',
            'ID_user' => 'U003',
            'ID_tes' => 'T004',
            'jawaban_soal' => 'Jawaban4.docx'
        ]);
        DB::table('konfirmasi_tkpba')->insert([
            'ID_konfirmasi' => 'K005',
            'ID_user' => 'U003',
            'ID_tes' => 'T005',
            'jawaban_soal' => 'Jawaban5.docx'
        ]);
    }
}
