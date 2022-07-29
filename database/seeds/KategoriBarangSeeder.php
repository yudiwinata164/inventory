<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriBarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kategori_barangs')->insert([
            [
                "nama_kategori" => "CPU",
            ],
            [
                "nama_kategori" => "Monitor",
            ],
            [
                "nama_kategori" => "AIO",
            ],
            [
                "nama_kategori" => "Laptop",
            ],
            [
                "nama_kategori" => "Printer",
            ],
            [
                "nama_kategori" => "Periferal",
            ],
        ]);
    }
}
