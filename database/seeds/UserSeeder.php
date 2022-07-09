<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "Admin IT Puri Bunda",
            'username' => "admin123",
            'email' => 'admin123'.'@gmail.com',
            'password' => Hash::make('admin123'),
        ]);
    }
}
