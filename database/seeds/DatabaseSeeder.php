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
        $this->call(UserSeeder::class);
        $this->call(DataBarangSeeder::class);
        $this->call(KategoriBarangSeeder::class);
        $this->call(MaintenanceSeeder::class);
        $this->call(JenisMaintenanceSeeder::class);
    }
}
