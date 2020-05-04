<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserCalonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_calon')->insert([
            'ID_calon' => 'C001',
            'username' => 'Aira',
            'password' => '526',
            'nama' => 'Aira Putri',
            'no_telepon' => '082377651827',
            'alamat' => 'Jl. Anggrek',
            'posisi_lamaran' => 'Produksi',
            'tanggal_lahir' => date('Y-m-d', strtotime("12/12/2012")),
            'no_ktp' => '1672000182',
            'jenis_kelamin' => 'P',
            'agama' => 'Islam',
            'pendidikan_terakhir' => 'S1',
            'pengalaman_kerja' => '3'
        ]);

        DB::table('user_calon')->insert([
            'ID_calon' => 'C002',
            'username' => 'Inggi',
            'password' => '456',
            'nama' => 'Inggi Dwi',
            'no_telepon' => '081388759200',
            'alamat' => 'Jl. Delima',
            'posisi_lamaran' => 'Finansial',
            'tanggal_lahir' => date('Y-m-d', strtotime("11/11/2011")),
            'no_ktp' => '1672002177',
            'jenis_kelamin' => 'P',
            'agama' => 'Kristen',
            'pendidikan_terakhir' => 'D3',
            'pengalaman_kerja' => '4'
        ]);

        DB::table('user_calon')->insert([
            'ID_calon' => 'C003',
            'username' => 'Fajar',
            'password' => '678',
            'nama' => 'Fajar Putra',
            'no_telepon' => '081174852299',
            'alamat' => 'Jl. Rambutan',
            'posisi_lamaran' => 'HRD',
            'tanggal_lahir' => date('Y-m-d', strtotime("11/01/2011")),
            'no_ktp' => '1671000378',
            'jenis_kelamin' => 'L',
            'agama' => 'Islam',
            'pendidikan_terakhir' => 'S1',
            'pengalaman_kerja' => '3'
        ]);

        DB::table('user_calon')->insert([
            'ID_calon' => 'C004',
            'username' => 'Reha',
            'password' => '890',
            'nama' => 'Reha Putra',
            'no_telepon' => '082398006823',
            'alamat' => 'Jl. Kelapa Sawit',
            'posisi_lamaran' => 'Sales&Marketing',
            'tanggal_lahir' => date('Y-m-d', strtotime("11/04/2012")),
            'no_ktp' => '1678000234',
            'jenis_kelamin' => 'L',
            'agama' => 'Hindu',
            'pendidikan_terakhir' => 'S1',
            'pengalaman_kerja' => '3'
        ]);

        DB::table('user_calon')->insert([
            'ID_calon' => 'C005',
            'username' => 'Icin',
            'password' => '657',
            'nama' => 'Icin Putri',
            'no_telepon' => '081592837790',
            'alamat' => 'Jl. Elang',
            'posisi_lamaran' => 'Pengadaan dan Gudang',
            'tanggal_lahir' => date('Y-m-d', strtotime("11/04/2011")),
            'no_ktp' => '1675004912',
            'jenis_kelamin' => 'P',
            'agama' => 'Budha',
            'pendidikan_terakhir' => 'D3',
            'pengalaman_kerja' => '4'
        ]);
    }
}
