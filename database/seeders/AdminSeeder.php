<?php

namespace Database\Seeders;

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> origin/feature_incomplet_details
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
        $user = User::create([
            'name' => 'Admin',
            'mobile_no' => '0123456789',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('1234'),
        ]);

        UserPersonal::create([
            'user_id' => $user->id,
<<<<<<< HEAD
            'name'=>$user->name,
       ]);
=======
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\UserPersonal;
class AdminSeeder extends Seeder
{
    public function run(): void
    {
        $user = User::create([
            'name' => 'Admin',
            'mobile_no' => '0123456789',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('1234'),
        ]);

        UserPersonal::create([
            'user_id' => $user->id,
            'name' => $user->name,
        ]);
>>>>>>> origin/featured-multilevelmenu
=======
            'name' => $user->name,
        ]);
>>>>>>> origin/feature_incomplet_details
    }
}
