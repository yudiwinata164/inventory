<?php

use Illuminate\Database\Seeder;

class JenisMaintenanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jenis_maintenances')->insert([
            [
                "nama_jenis" => "Cleaning Rutin",
            ],
            [
                "nama_jenis" => "Ganti Hardware",
            ],
            [
                "nama_jenis" => "Install Ulang",
            ],
            [
                "nama_jenis" => "Mutasi",
            ],
            [
                "nama_jenis" => "Other",
            ],
        ]);
    }
}
