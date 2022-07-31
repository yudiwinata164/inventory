<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MaintenanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $date = Carbon::now();
        $createdDate = clone($date);

        DB::table('maintenances')->insert([
            [
                "databarang_id" => '1',
                "tanggal"       => $createdDate,
                "user_awal"     => "Poli RJ",
                "posisi_awal"   => "Poli RJ",
                "lantai"        => "Lantai 2",
                "ram"           => "4 GB DDR3",
                "prosesor"      => "Intel Celeron N3050 @1.60 Ghz",
                "kondisi"       => "Baru",
                "pic"           => "Arda",
            ],
            [
                "databarang_id" => '1',
                "tanggal"       => $createdDate,
                "user_awal"     => "UGD",
                "posisi_awal"   => "Ruang IT",
                "lantai"        => "Lantai 1",
                "ram"           => "4 GB DDR4",
                "prosesor"      => "Intel Core i3 10110U @ 2.10 Ghz",
                "kondisi"       => "Baru",
                "pic"           => "Arda",
            ],
            [
                "databarang_id" => '4',
                "tanggal"       => $createdDate,
                "user_awal"     => "UGD",
                "posisi_awal"   => "Ruang IT",
                "lantai"        => "Lantai 1",
                "ram"           => "4 GB DDR4",
                "prosesor"      => "Intel Core i3 10110U @ 2.10 Ghz",
                "kondisi"       => "Baru",
                "pic"           => "MEME",
            ],
        ]);
        
    }
}
