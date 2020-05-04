<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserPerusahaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_perusahaan')->insert([
            'ID_user' => 'U001',
            'username' => 'Tio',
            'password' => '111',
            'status' => 'Direktur Utama'
        ]);
        DB::table('user_perusahaan')->insert([
            'ID_user' => 'U002',
            'username' => 'Akbar',
            'password' => '222',
            'status' => 'Manager HRD'
        ]);
        DB::table('user_perusahaan')->insert([
            'ID_user' => 'U003',
            'username' => 'Lici',
            'password' => '333',
            'status' => 'Staff HRD'
        ]);
    }
}
