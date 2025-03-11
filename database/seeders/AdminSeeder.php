<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UserPersonal;
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
       $user=User::create([
            'name' => 'Admin',
            'mobile_no' => '1234567890',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin123'),
       ]);
       UserPersonal::create([
            'user_id' => $user->id,
            'name'=>$user->name,
       ]);
    }
}
