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
            'full_name' => 'Ramu Ray',
            'dob' => '2000-01-01',
            'caste' => '16',
            'next_level_role_id' => '1',
            'scheme_id' => '10',
            'is_clean' => '1',
            'marital_status' => '21',
            'gender' => '28',
            'district_id' => '318',
            'block_id' => '2974',
        ]);
        BeneficiaryAadhaar::create([
            'ben_id' => $BeneficiaryIdserial->id,
            'encode_key' => 'ADL3GVU6scyXWbSbUSiTwMyMl7639jh3K3hI1e7GIMY=',
            'encoded_aadhar' => Crypt::encrypt(value: '012345678901'),
            'scheme_id' => '10',
            'is_clean' => '1',
            'aadhar_hash' => md5('012345678901'),
        ]);
        BeneficiaryBank::create([
            'ben_id' => $BeneficiaryIdserial->id,
            'ifsc' => 'SBIN0009136',
            'account_no' => '01234567891',
            'scheme_id' => '10',
            'is_clean' => '1',
        ]);
        BeneficiaryIdentification::create([
            'ben_id' => $BeneficiaryIdserial->id,
            'identification_type_id' => '44',
            'identification_value' => '0123456789',
            'scheme_id' => '10',
        ]);
        BeneficiaryOther::create([
            'ben_id' => $BeneficiaryIdserial->id,
            'scheme_id' => '10',
        ]);
        $beneficiaries = [
            [
                'ben_id' => $BeneficiaryIdserial->id,
                'full_name' => 'Raju Ray',
                'relation_type_id' => '76',
                'scheme_id' => '10',
            ],
            [
                'ben_id' => $BeneficiaryIdserial->id,
                'full_name' => 'Rimi Ray',
                'relation_type_id' => '77',
                'scheme_id' => '10',
            ],
        ];
        foreach ($beneficiaries as $beneficiary) {
            BeneficiaryRelationship::create($beneficiary);
        }
    }
}
