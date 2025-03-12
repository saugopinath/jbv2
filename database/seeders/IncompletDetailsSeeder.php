<?php

namespace Database\Seeders;

use App\Models\Codemaster;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class IncompletDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $codemasterParents = array(
            array(
                "name" => "Incomplete Details",
                "short_name" => "incomplete_details",
            ),

        );
        foreach ($codemasterParents as $codemasterParent_item) {
            Codemaster::create([
                'name'     => strtoupper($codemasterParent_item['name']),
                'short_name'     => $codemasterParent_item['short_name'],
            ]);
        }

        $codemasterChilds = array(
            array(
                "name" => "No Aadhar Number",
                "short_name" => "noaadhar",
                "parent_short_code" => "incomplete_details",
            ),
            array(
                "name" => "No Aadhar Document",
                "short_name" => "duplicateaadhar",
                "parent_short_code" => "incomplete_details",
            ),
            array(
                "name" => "No Mobile Number",
                "short_name" => "nomobile",
                "parent_short_code" => "incomplete_details",
            ),
            array(
                "name" => "No Bank Passbook",
                "short_name" => "nobankpassbook",
                "parent_short_code" => "incomplete_details",
            ),
            array(
                "name" => "Account Name Validation Failed",
                "short_name" => "accnamevalidation",
                "parent_short_code" => "incomplete_details",
            ),
            array(
                "name" => "Account Number Validation Failed",
                "short_name" => "accnumbervalidation",
                "parent_short_code" => "incomplete_details",
            ),
            array(
                "name" => "No Cast Certificate Document",
                "short_name" => "nocastcertificatedoc",
                "parent_short_code" => "incomplete_details",
            ),
            array(
                "name" => "No Cast Certificate Number",
                "short_name" => "nocastcertificatenum",
                "parent_short_code" => "incomplete_details",
            ),
            array(
                "name" => "Duplicate Aadhar",
                "short_name" => "duplicateaadhar",
                "parent_short_code" => "incomplete_details",
            ),
            array(
                "name" => "Duplicate Mobile",
                "short_name" => "duplicatemobile",
                "parent_short_code" => "incomplete_details",
            ),
            array(
                "name" => "Duplicate Bank",
                "short_name" => "duplicatebank",
                "parent_short_code" => "incomplete_details",
            ),
        );
        foreach ($codemasterChilds as $codemasterChild_item) {
            Codemaster::create([
                'name'     => strtoupper($codemasterChild_item['name']),
                'short_name'     => $codemasterChild_item['short_name'],
                'parent_id'   => Codemaster::where('short_name', $codemasterChild_item['parent_short_code'])->firstOrFail()->id,
            ]);
        }
    }
}
