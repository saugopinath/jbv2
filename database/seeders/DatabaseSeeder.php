<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            LGD\StateSeeder::class,
            LGD\DistrictSeeder::class,
            LGD\BlockSeeder::class,
            LGD\PanchayatSeeder::class,
            LGD\SubdivisionSeeder::class,
            LGD\MunicipalitiesSeeder::class,
            LGD\WardSeeder::class,
            DepartmentSeeder::class,
            SchemeSeeder::class,
            CodemasterSeeder::class,
            BankSeeder::class,
            IfscSeeder::class,
            DepartmentSeeder::class,
            SchemeSeeder::class,
            CodemasterSeeder::class,
            BankSeeder::class,
            IfscSeeder::class,
            AdminSeeder::class,
        ]);
    }
}
