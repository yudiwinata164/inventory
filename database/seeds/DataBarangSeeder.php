<?php

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DataBarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $carbon = new Carbon();
        $nowdate = $carbon->now();
        DB::table('data_barangs')->insert([
            [
                'tanggal_terima'        => $nowdate,
                'nama_barang'           => 'Laptop ACER Aspire 3',
                'kode_barang'           => '6.2.03.2021',
                'ip_sistem'             => '192.168.1.252',
                'spesifikasi'           => 'Intel Celeron N3050 @1.60 Ghz',
                'vendor'                => 'Magnum',
                'password_teamviewer'   => null,
                'password_anydesk'      => null,
                'status'                => "Digunakan",
            ],           
            [
                'tanggal_terima'        => $nowdate,
                'nama_barang'           => 'Laptop H',
                'kode_barang'           => '5.1.02.2021',
                'ip_sistem'             => '192.168.1.141',
                'spesifikasi'           => 'Intel Core i3 10110U @ 2.10 Ghz',
                'vendor'                => 'Magnum',
                'password_teamviewer'   => null,
                'password_anydesk'      => null,
                'status'                => "Dalam Gudang",
            ],           
            [
                'tanggal_terima'        => $nowdate,
                'nama_barang'           => 'Laptop ACER Aspire 3',
                'kode_barang'           => '4.0.00.2021',
                'ip_sistem'             => '192.168.1.90',
                'spesifikasi'           => 'Intel Core i3 10110U @ 2.10 Ghz',
                'vendor'                => 'Vendor Global',
                'password_teamviewer'   => null,
                'password_anydesk'      => null,
                'status'                => "Digunakan",
            ],           
            [
                'tanggal_terima'        => $nowdate,
                'nama_barang'           => 'Laptop ACER Aspire 3',
                'kode_barang'           => '3.9.99.2021',
                'ip_sistem'             => '192.168.1.71',
                'spesifikasi'           => 'Intel Celeron N3050 @1.60 Ghz',
                'vendor'                => 'Vendor Global',
                'password_teamviewer'   => null,
                'password_anydesk'      => null,
                'status'                => "Dalam Gudang",
            ],           
        ]);
    }
}
