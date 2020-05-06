<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tes_tkpba')->insert([
            'ID_tes'=>'T001',
            'ID_soal'=>'S001',
            'ID_calon'=>'C001'
        ]);
        DB::table('tes_tkpba')->insert([
            'ID_tes'=>'T002',
            'ID_soal'=>'S003',
            'ID_calon'=>'C002'
        ]);
        DB::table('tes_tkpba')->insert([
            'ID_tes'=>'T003',
            'ID_soal'=>'S002',
            'ID_calon'=>'C003'
        ]);
        DB::table('tes_tkpba')->insert([
            'ID_tes'=>'T004',
            'ID_soal'=>'S001',
            'ID_calon'=>'C004'
        ]);
        DB::table('tes_tkpba')->insert([
            'ID_tes'=>'T005',
            'ID_soal'=>'S001',
            'ID_calon'=>'C005'
        ]);
    }
}
