<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userId = DB::table('users')->insertGetId([
            'mobile_no' => '7001306347',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('1234'),
        ]);
        DB::table('user_personals')->insert([
            'user_id' => $userId,
            'name' => 'Admin',
        ]);
    }
}
