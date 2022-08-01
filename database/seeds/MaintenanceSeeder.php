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
                "databarang_id"     => 1,
                "tanggal"           => $createdDate,
                "jenis_maintenance" => "Cleaning Rutin",
                "pic"               => "Meme",
                "user"              => "Poli RJ",
                "unit"              => "Poli RJ",
                "service"           => "Service 1",
                "estimasi"          => $createdDate,
            ],
        ]);
        
    }
}
