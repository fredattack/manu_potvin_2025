<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customer_data')->insert([
            'id' => 1,
            'name' => 'Manu Potvin',
            'address' => "Rue Emile Permanne 4/A </br> 4280 Hannut",
            'email' => 'info@manupotvin.be',
            'phone' => '0475 62 64 40',
            'notes' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
