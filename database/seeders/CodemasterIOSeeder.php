<?php

namespace Database\Seeders;

use App\Models\Codemaster;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CodemasterIOSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $codemasterParents = array(
            array(
                "name" => "INCOMPLETE DETAILS",
                "short_name" => "incomplete_details",
                
            ),
            array(
                "name" => "OFFICE TYPE",
                "short_name" => "office_type",
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
            "name" => "NO AADHAR NUMBER",
            "short_name" => "no_aadhar_number",
            "parent_short_code" => "incomplete_details",
        ),
        array(
            "name" => "NO MOBILE NUMBER",
            "short_name" => "no_mobile_number",
            "parent_short_code" => "incomplete_details",
        ),
        array(
            "name" => "NO AADHAR DOCUMENT",
            "short_name" => "no_aadhar_document",
            "parent_short_code" => "incomplete_details",
        ),
        array(
            "name" => "BANK PASSBOOK NOT AVAILABLE",
            "short_name" => "bank_passbook_not_available",
            "parent_short_code" => "incomplete_details",
        ),
        array(
            "name" => "NAME VALIDATION  FAILED IN BANK",
            "short_name" => "name_validation_failed_in_bank",
            "parent_short_code" => "incomplete_details",
        ),
        array(
            "name" => "ACCOUNT NUMBER VALIDATION  FAILED IN BANK",
            "short_name" => "account_number_validation_failed_in_bank",
            "parent_short_code" => "incomplete_details",
        ),
        array(
            "name" => "NO CASTE CERTIFICATE NUMBER",
            "short_name" => "no_caste_certificate_number",           
            "parent_short_code" => "incomplete_details",
        ),
        array(
            "name" => "NO CASTE DOCUMENT",
            "short_name" => "no_caste_document",
            "parent_short_code" => "incomplete_details",
        ),
        array(
            "name" => "DUPLICATE AADHAR NUMBER",
            "short_name" => "duplicate_aadhar_number",
            "parent_short_code" => "incomplete_details",
        ),
        array(
            "name" => "DUPLICATE MOBILE NUMBER",
            "short_name" => "duplicate_mobile_number",
            "parent_short_code" => "incomplete_details",
        ),
        array(
            "name" => "DUPLICATE BANK ACCOUNT NUMBER",
            "short_name" => "duplicate_bank_account_number",
            "parent_short_code" => "incomplete_details",
        ),   
        array(
            "name" => "STATE OFFICE",
            "short_name" => "state_office",
            "parent_short_code" => "office_type",
        ),
        array(
            "name" => "DISTRICT OFFICE",
            "short_name" => "district_office",
            "parent_short_code" => "office_type",
        ),
        array(
            "name" => "BLOCK OFFICE",
            "short_name" => "block_office",
            "parent_short_code" => "office_type",
        ),
        array(
            "name" => "SUBDIVISION OFFICE",
            "short_name" => "subdivision_office",
            "parent_short_code" => "office_type",
        ),
        array(
            "name" => "MUNICIPALITY OFFICE",
            "short_name" => "municipality_office",
            "parent_short_code" => "office_type",
        ),
        array(
            "name" => "PANCHAYAT OFFICE",
            "short_name" => "panchayat_office",
            "parent_short_code" => "office_type",
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
