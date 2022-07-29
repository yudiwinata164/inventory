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
        $nowdate = new Carbon();
        DB::table('data_barangs')->insert([
            [
                'kode_barang'           => '2.2.01.2021',
                'nama_barang'           => 'LED ASUS VS197DE',
                'kategori'              => 'Monitor',
                'seri_perangkat'        => 'VS197DE',
                'serial_number'         => '001',
                'ram'                   => 'DDR 4',
                'prosesor'              => 'Intel Celeron N3050 @1.60 Ghz',
                'password_teamviewer'   => null,
                'password_anydesk'      => null,
                'status'                => 'Digunakan',
                'tanggal_terima'        => '2022-07-09',
                'tanggal_distribusi'    => '2022-07-19',
            ],        
            [
                'kode_barang'           => null,
                'nama_barang'           => 'Laptop ACER Aspire 3',
                'kategori'              => 'CPU',
                'seri_perangkat'        => "CG197DE",
                'serial_number'         => null,
                'ram'                   => 'DDR 4',
                'prosesor'              => 'Intel Celeron N3050 @1.60 Ghz',
                'password_teamviewer'   => null,
                'password_anydesk'      => null,
                'status'                => 'Dalam Gudang',
                'tanggal_terima'        => '2022-07-09',
                'tanggal_distribusi'    => null,
            ],        
            [
                'kode_barang'           => null,
                'nama_barang'           => 'HP LaserJet Pro M12w.',
                'kategori'              => 'Printer',
                'seri_perangkat'        => "PO197WE",
                'serial_number'         => null,
                'ram'                   => 'DDR 4',
                'prosesor'              => 'AMD Athlon 3000G.',
                'password_teamviewer'   => null,
                'password_anydesk'      => null,
                'status'                => 'Dalam Gudang',
                'tanggal_terima'        => '2022-07-09',
                'tanggal_distribusi'    => null,
            ],        
            [
                'kode_barang'           => '4.2.03.2021',
                'nama_barang'           => 'Laptop ACER Aspire 3',
                'kategori'              => 'CPU',
                'seri_perangkat'        => 'DD107VE',
                'serial_number'         => '009',
                'ram'                   => 'DDR 4',
                'prosesor'              => 'Intel Celeron N3050 @1.60 Ghz',
                'password_teamviewer'   => null,
                'password_anydesk'      => null,
                'status'                => 'Digunakan',
                'tanggal_terima'        => '2022-07-09',
                'tanggal_distribusi'    => '2022-07-19',
            ],        
        ]);
    }
}
