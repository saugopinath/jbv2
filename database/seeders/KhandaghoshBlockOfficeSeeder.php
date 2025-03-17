<?php

namespace Database\Seeders;

use App\Models\Codemaster;
use App\Models\OfficeMaster;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KhandaghoshBlockOfficeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        OfficeMaster::create([
            'name' => 'Khandaghosh Block Office',
            'address' => 'Khandaghosh,West Bengal',
            'zip' => '713142',
            'office_type' => Codemaster::where('short_name', 'block_office')->firstOrFail()->id,
            'state_id' => '19',
            'district_id' => '306',
            'block_id' => '2814',
            
        ]);
          
           
    }
}
