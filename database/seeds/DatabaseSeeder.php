<?php

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
    }
}
