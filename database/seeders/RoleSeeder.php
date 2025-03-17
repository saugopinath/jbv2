<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role = array(
            array(
                "name" => "Operator",
                "guard_name" => "Web",
                
            ),
            array(
                "name" => "Verifyer",
                "guard_name" => "Web",
            ),
            array(
                "name" => "Approver",
                "guard_name" => "Web",
            ),

            
            
        );
        foreach ($role as $role_item) {
            Role::create([
                'name'     => strtoupper($role_item['name']),
                'guard_name'     => $role_item['guard_name'],
            ]);
        }
    }
}
