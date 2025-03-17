<?php

namespace Database\Seeders;

use App\Models\Codemaster;
use App\Models\OfficeMaster;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AsansolSuvdivisionOfficeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        OfficeMaster::create([
            'name' => 'Asansol Subdivision Office',
            'address' => 'Asansol,West Bengal',
            'zip' => '713301',
            'office_type' => Codemaster::where('short_name', 'subdivision_office')->firstOrFail()->id,
            'state_id' => '19',
            'district_id' => '704',
            'subdivisions_id' => '70401',
            
        ]); 
    }
}
