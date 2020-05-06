<?php

use App\Penerimaan;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserCalonSeeder::class);
        $this->call(UserPerusahaanSeeder::class);
        $this->call(RekapitulasiSeeder::class);
        $this->call(SoalSeeder::class);
        $this->call(HasilSeeder::class);
        $this->call(KonfirmasiSeeder::class);
        $this->call(PenerimaanSeeder::class);
        $this->call(TesSeeder::class);
    }
}
