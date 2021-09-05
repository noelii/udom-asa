<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'name' => 'Administrator', 'name_abbreviation' => 'Admin'],
            ['id' => 2, 'name' => 'R_User', 'name_abbreviation' => 'RU'],
            
            
        ];

        foreach ($items as $item) {
            Role::create($item);
        }
    }
    
}
