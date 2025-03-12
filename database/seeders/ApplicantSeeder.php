<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\BeneficiaryIdserial;
use App\Models\BeneficiaryPersonal;
use App\Models\BeneficiaryAadhaar;
use App\Models\BeneficiaryBank;
use App\Models\BeneficiaryRelationship;
use App\Models\BeneficiaryOther;
use App\Models\BeneficiaryIdentification;
use Illuminate\Support\Facades\Crypt;
class ApplicantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $BeneficiaryIdserial = BeneficiaryIdserial::create([
        ]);
        BeneficiaryPersonal::create([
            'ben_id' => $BeneficiaryIdserial->id,
            'full_name' => 'Shubhadeep Ray',
            'dob' => '1997-11-21',
            'caste' => '16',
            'next_level_role_id' => '1',
            'scheme_id' => '10',
            'is_clean' => '1',
            'marital_status' => '21',
            'gender' => '28',
            'district_id' => '318',
            'block_id' => '2525',
        ]);
        BeneficiaryAadhaar::create([
            'ben_id' => $BeneficiaryIdserial->id,
            'encode_key' => 'base64:ADL3GVU6scyXWbSbUSiTwMyMl7639jh3K3hI1e7GIMY=',
            'encoded_aadhar' => Crypt::encrypt(469784745472),
            'scheme_id' => '10',
            'is_clean' => '1',
            'aadhar_hash' => md5(469784745472),
        ]);
        BeneficiaryBank::create([
            'ben_id' => $BeneficiaryIdserial->id,
            'ifsc' => 'SBIN0009136',
            'account_no' => '33466695384',
            'scheme_id' => '10',
            'is_clean' => '1',
        ]);
        BeneficiaryRelationship::create([
            'ben_id' => $BeneficiaryIdserial->id,
            'full_name' => 'Prokash Ray',
            'relation_type_id' => '76',
            'scheme_id' => '10',
        ]);
        BeneficiaryRelationship::create([
            'ben_id' => $BeneficiaryIdserial->id,
            'full_name' => 'Kakali Ray',
            'relation_type_id' => '77',
            'scheme_id' => '10',
        ]);
    }
}
