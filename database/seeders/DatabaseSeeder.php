<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
//         User::factory(10)->create();
        $this->call([
            CustomerDataSeeder::class,
            RealisationSeeder::class,
            TestimonialSeeder::class,
//            CustomMediaSeeder::class,
        ]);

        User::factory()->create([
            'name' => 'Fred',
            'email' => 'fred@hddev.be',
        ]);

        User::factory()->create([
            'name' => 'manu potvin',
            'email' => 'info@manupotvin.be',
            'password' => bcrypt('P@ssw0rd'),
        ]);
    }
}
