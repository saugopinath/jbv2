<?php

namespace Database\Seeders;

use App\Models\Codemaster;
use App\Models\OfficeMaster;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PurbaBardhamanDistOfficeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        OfficeMaster::create([
            'name' => 'Purba Bardhaman Dist Office',
            'address' => 'PurbaBardhaman,WesBengal',
            'zip' => '713101',
            'office_type' => Codemaster::where('short_name', 'district_office')->firstOrFail()->id,
            'state_id' => '19',
            'district_id' => '306', 
        ]);
    }
}
