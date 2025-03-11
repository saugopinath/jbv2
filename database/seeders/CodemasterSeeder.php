<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Codemaster;
class CodemasterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $codemasterParents = array(
            array(
                "name" => "CASTE",
                "short_name" => "caste",
            ),
            array(
                "name" => "NEXT LEVEL ROLE ID",
                "short_name" => "next_level_role_id",
            ),
            array(
                "name" => "Marital Status",
                "short_name" => "marital_status",
            ),
            array(
                "name" => "Entry Type",
                "short_name" => "entry_type",
            ),
            array(
                "name" => "Gender",
                "short_name" => "gender",
            ),
            array(
                "name" => "Disablity Type",
                "short_name" => "disablity_type",
            ),
            array(
                "name" => "Ration Card Category",
                "short_name" => "ration_cat",
            ),
            array(
                "name" => "Pension Body",
                "short_name" => "pension_body",
            ),
            array(
                "name" => "Social Pension Category",
                "short_name" => "social_pension_cat",
            ),
            array(
                "name" => "not_eligible_cause",
                "short_name" => "not_eligible_cause",
            ),
            array(
                "name" => "Religion",
                "short_name" => "religion",
            ),
            array(
                "name" => "Rejection Revert Cause",
                "short_name" => "rejection_cause",
            ),
            array(
                "name" => "Relationship",
                "short_name" => "relationship",
            ),
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
                "name" => "SC",
                "short_name" => "sc",
                "parent_short_code" => "caste",
            ),
            array(
                "name" => "ST",
                "short_name" => "st",
                "parent_short_code" => "caste",
            ),
            array(
                "name" => "General",
                "short_name" => "general",
                "parent_short_code" => "caste",
            ),
            array(
                "name" => "NEXT LEVEL ROLE ID OPERATOR",
                "short_name" => "next_level_role_id_operator",
                "parent_short_code" => "next_level_role_id",
            ),
            array(
                "name" => "NEXT LEVEL ROLE ID VERIFIER",
                "short_name" => "next_level_role_id_verifier",
                "parent_short_code" => "next_level_role_id",
            ),
            array(
                "name" => "NEXT LEVEL ROLE ID APPROVER",
                "short_name" => "next_level_role_id_approver",
                "parent_short_code" => "next_level_role_id",
            ),
            array(
                "name" => "NEXT LEVEL ROLE ID RECOMANDER",
                "short_name" => "next_level_role_id_recomander",
                "parent_short_code" => "next_level_role_id",
            ),
            array(
                "name" => "Marital Status Unmarried",
                "short_name" => "marital_status_unmarried",
                "parent_short_code" => "marital_status",
            ),
            array(
                "name" => "Marital Status Married",
                "short_name" => "marital_status_married",
                "parent_short_code" => "marital_status",
            ),
            array(
                "name" => "Marital Status Seperated",
                "short_name" => "marital_status_seperated",
                "parent_short_code" => "marital_status",
            ),
            array(
                "name" => "Marital Status Widow",
                "short_name" => "marital_status_widow",
                "parent_short_code" => "marital_status",
            ),
            array(
                "name" => "Marital Status Widower",
                "short_name" => "marital_status_widower",
                "parent_short_code" => "marital_status",
            ),
            array(
                "name" => "Entry Type Normal",
                "short_name" => "entry_type_normal",
                "parent_short_code" => "entry_type",
            ),
            array(
                "name" => "Entry Type Duare Sarkar",
                "short_name" => "entry_type_duare_sarkar",
                "parent_short_code" => "entry_type",
            ),
            array(
                "name" => "Male",
                "short_name" => "male",
                "parent_short_code" => "gender",
            ),
            array(
                "name" => "Female",
                "short_name" => "female",
                "parent_short_code" => "gender",
            ),
            array(
                "name" => "Other",
                "short_name" => "other",
                "parent_short_code" => "gender",
            ),
            array(
                "name" => "Orthopedically Handicapped",
                "short_name" => "OH",
                "parent_short_code" => "disablity_type",
            ),
            array(
                "name" => "Visually Handicapped",
                "short_name" => "VH",
                "parent_short_code" => "disablity_type",
            ),
            array(
                "name" => "Mental illness",
                "short_name" => "MI",
                "parent_short_code" => "disablity_type",
            ),
            array(
                "name" => "Mental Retardation",
                "short_name" => "MR",
                "parent_short_code" => "disablity_type",
            ),
            array(
                "name" => "Mutiple Disablities",
                "short_name" => "MD",
                "parent_short_code" => "disablity_type",
            ),
            array(
                "name" => "Leprosy Cured",
                "short_name" => "LC",
                "parent_short_code" => "disablity_type",
            ),
            array(
                "name" => "Nervous Disorder",
                "short_name" => "ND",
                "parent_short_code" => "disablity_type",
            ),
            array(
                "name" => "Others",
                "short_name" => "others",
                "parent_short_code" => "disablity_type",
            ),
            array(
                "name" => "AAY",
                "short_name" => "AAY",
                "parent_short_code" => "ration_cat",
            ),
            array(
                "name" => "OHH",
                "short_name" => "OHH",
                "parent_short_code" => "ration_cat",
            ),
            array(
                "name" => "RKSY 1",
                "short_name" => "RKSY 1",
                "parent_short_code" => "ration_cat",
            ),
            array(
                "name" => "RKSY 2",
                "short_name" => "RKSY 2",
                "parent_short_code" => "ration_cat",
            ),
            array(
                "name" => "SPHH",
                "short_name" => "SPHH",
                "parent_short_code" => "ration_cat",
            ),
            array(
                "name" => "PHH",
                "short_name" => "PHH",
                "parent_short_code" => "ration_cat",
            ),
            array(
                "name" => "Central Govt",
                "short_name" => "Central Govt",
                "parent_short_code" => "pension_body",
            ),
            array(
                "name" => "State Govt",
                "short_name" => "State Govt",
                "parent_short_code" => "pension_body",
            ),
            array(
                "name" => "Local Administration",
                "short_name" => "Local Administration",
                "parent_short_code" => "pension_body",
            ),
            array(
                "name" => "Govt. Aided Organization",
                "short_name" => "Govt. Aided Organization",
                "parent_short_code" => "pension_body",
            ),
            array(
                "name" => "NSAP Old Age",
                "short_name" => "NSAP Old Age",
                "parent_short_code" => "social_pension_cat",
            ),
            array(
                "name" => "NSAP Widow Pension",
                "short_name" => "NSAP Widow Pension",
                "parent_short_code" => "social_pension_cat",
            ),
            array(
                "name" => "NSAP Disability Pension",
                "short_name" => "NSAP Disability Pension",
                "parent_short_code" => "social_pension_cat",
            ),
            array(
                "name" => "Old Age Pension",
                "short_name" => "Old Age Pension",
                "parent_short_code" => "social_pension_cat",
            ),
            array(
                "name" => "Widow Pension",
                "short_name" => "Widow Pension",
                "parent_short_code" => "social_pension_cat",
            ),
            array(
                "name" => "Disability Pension",
                "short_name" => "Disability Pension",
                "parent_short_code" => "social_pension_cat",
            ),
            array(
                "name" => "Lok Prasar Prakalpa",
                "short_name" => "Lok Prasar Prakalpa",
                "parent_short_code" => "social_pension_cat",
            ),
            array(
                "name" => "Fishermans Old Age Pension",
                "short_name" => "Fisherman Old Age Pension",
                "parent_short_code" => "social_pension_cat",
            ),
            array(
                "name" => "Farmers Old Age Pension",
                "short_name" => "Farmers Old Age Pension",
                "parent_short_code" => "social_pension_cat",
            ),
            array(
                "name" => "Artisan/Weaver Old Age Pension",
                "short_name" => "Artisan/Weaver Old Age Pension",
                "parent_short_code" => "social_pension_cat",
            ),
         array(
                "name" => "Hinduism",
                "short_name" => "Hinduism",
                "parent_short_code" => "religion",
            ),
            array(
                "name" => "Islam",
                "short_name" => "Islam",
                "parent_short_code" => "religion",
            ),
            array(
                "name" => "Christianity",
                "short_name" => "Christianity",
                "parent_short_code" => "religion",
            ),
            array(
                "name" => "Sikhism",
                "short_name" => "Sikhism",
                "parent_short_code" => "religion",
            ),
            array(
                "name" => "Buddhism",
                "short_name" => "Buddhism",
                "parent_short_code" => "religion",
            ),
            array(
                "name" => "Jainism",
                "short_name" => "Jainism",
                "parent_short_code" => "religion",
            ),
            array(
                "name" => "Unaffiliated",
                "short_name" => "Unaffiliated",
                "parent_short_code" => "religion",
            ),
            array(
                "name" => "Others",
                "short_name" => "Others",
                "parent_short_code" => "religion",
            ),
            array(
                "name" => "Duplicate Bank Account Number",
                "short_name" => "DUP BANK",
                "parent_short_code" => "rejection_cause",
            ),
            array(
                "name" => "Duplicate Aadhaar Number",
                "short_name" => "DUP AADHAAR",
                "parent_short_code" => "rejection_cause",
            ),
            array(
                "name" => "Bank Passbook Not Uploaded or Not Clearly Visible",
                "short_name" => "VisibleBankDocument",
                "parent_short_code" => "rejection_cause",
            ),
            array(
                "name" => "Aadhaar Document Not Uploaded or Not Clearly Visible",
                "short_name" => "VisibleAadharDocument",
                "parent_short_code" => "rejection_cause",
            ),
            array(
                "name" => "Caste Cerificate Document Not Uploaded or Not Clearly Visible",
                "short_name" => "VisibleCasteDocument",
                "parent_short_code" => "rejection_cause",
            ),
            array(
                "name" => "Caste Cerificate Number Not Avilable",
                "short_name" => "CasteCerificate",
                "parent_short_code" => "rejection_cause",
            ),
            array(
                "name" => "DOB Invalid",
                "short_name" => "DOBINVALID",
                "parent_short_code" => "rejection_cause",
            ),
            array(
                "name" => "Some of the Document not clearly visible",
                "short_name" => "somedocnotvisible",
                "parent_short_code" => "rejection_cause",
            ),
            array(
                "name" => "Rejection due to Death",
                "short_name" => "deathcasue",
                "parent_short_code" => "rejection_cause",
            ),
            array(
                "name" => "Father",
                "short_name" => "relationshipfather",
                "parent_short_code" => "relationship",
            ),
            array(
                "name" => "Mother",
                "short_name" => "relationshipmother",
                "parent_short_code" => "relationship",
            ),
            array(
                "name" => "Spouse",
                "short_name" => "relationshipspouse",
                "parent_short_code" => "relationship",
            ),
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
