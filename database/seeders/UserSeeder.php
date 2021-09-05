<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 1 => admin, 2 => R_user
        $items = [
            
            ['id' => 1, 'firstName' => 'Joshua', 'secondName' => 'Frank', 'lastName' => 'Njau', 'email' => 'josh@gmail.com', 'password' => bcrypt('dddd1111'), 'status' => '0', 'role_id' => '1' ],

            ['id' => 2, 'firstName' => 'Khalid', 'secondName' => 'H', 'lastName' => 'Hassan', 'email' => 'thewinner@gmail.com', 'password' => bcrypt('dddd1111'), 'status' => '0', 'role_id' => '2'],

              ];

        foreach ($items as $item) {
            User::create($item);
        }
    }
    
}
