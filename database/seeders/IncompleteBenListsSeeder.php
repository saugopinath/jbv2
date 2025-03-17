<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\IncompleteBenList;
use App\Models\BenIncompletDetails;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class IncompleteBenListsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $benIncompletDetails = [
            [
                'ben_id' => 1,
                'scheme_id' => 1,
                'incomplete_type' => 82,
            ],
            [
                'ben_id' => 1,
                'scheme_id' => 1,
                'incomplete_type' => 83,
            ],
            [
                'ben_id' => 1,
                'scheme_id' => 1,
                'incomplete_type' => 84,
            ],
            [
                'ben_id' => 1,
                'scheme_id' => 1,
                'incomplete_type' => 85,
            ],
        ];

        foreach ($benIncompletDetails as $benIncomplet) {
            IncompleteBenList::create($benIncomplet);
        }
    }
}
