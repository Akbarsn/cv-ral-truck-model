<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RekapitulasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rekapitulasi_penilaian')->insert([
            'ID_rekapitulasi' => 'R001',
            'ID_calon' => 'C001',
            'status_administrasi' => 'Lulus',
            'status_tkpba' => 'Lulus',
            'status_psikologi' => 'Lulus',
            'interview' => 'Lulus',
            'status_calon' => 'Lulus',
        ]);

        DB::table('rekapitulasi_penilaian')->insert([
            'ID_rekapitulasi' => 'R002',
            'ID_calon' => 'C002',
            'status_administrasi' => 'Lulus',
            'status_tkpba' => 'Lulus',
            'status_psikologi' => 'Tidak',
            'interview' => 'Tidak',
            'status_calon' => 'Tidak',
        ]);

        DB::table('rekapitulasi_penilaian')->insert([
            'ID_rekapitulasi' => 'R003',
            'ID_calon' => 'C003',
            'status_administrasi' => 'Tidak',
            'status_tkpba' => 'Tidak',
            'status_psikologi' => 'Tidak',
            'interview' => 'Tidak',
            'status_calon' => 'Tidak',
        ]);

        DB::table('rekapitulasi_penilaian')->insert([
            'ID_rekapitulasi' => 'R004',
            'ID_calon' => 'C004',
            'status_administrasi' => 'Lulus',
            'status_tkpba' => 'Lulus',
            'status_psikologi' => 'Lulus',
            'interview' => 'Lulus',
            'status_calon' => 'Lulus',
        ]);

        DB::table('rekapitulasi_penilaian')->insert([
            'ID_rekapitulasi' => 'R005',
            'ID_calon' => 'C005',
            'status_administrasi' => 'Lulus',
            'status_tkpba' => 'Lulus',
            'status_psikologi' => 'Lulus',
            'interview' => 'Lulus',
            'status_calon' => 'Lulus',
        ]);
    }
}
