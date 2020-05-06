<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenerimaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('penerimaan')->insert([
            'ID_penerimaan' => 'P001',
            'ID_rekapitulasi' => 'R001',
            'ID_calon' => 'C001',
            'posisi_lamaran' => 'Produksi'
        ]);
        DB::table('penerimaan')->insert([
            'ID_penerimaan' => 'P002',
            'ID_rekapitulasi' => 'R004',
            'ID_calon' => 'C004',
            'posisi_lamaran' => 'Sales&Marketing'
        ]);
        DB::table('penerimaan')->insert([
            'ID_penerimaan' => 'P003',
            'ID_rekapitulasi' => 'R005',
            'ID_calon' => 'C005',
            'posisi_lamaran' => 'Pengadaan dan Gudang'
        ]);
    }
}
