<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BenIncompletDetails;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BenIncompletDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        $benIncompletDetails = [
            [
                // 'ben_id' => '1',
                'incomplet_type' => '82',
            ],
        ];
        foreach ($benIncompletDetails as $benIncomplet) {
            BenIncompletDetails::create($benIncomplet);
        }
    }
}
