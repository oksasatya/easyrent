<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD
        // \App\Models\User::factory(10)->create();

        $this->call(RentSeeder::class);
=======
        User::factory(10)->create();
>>>>>>> b2264fc3b8dc11a0a5b55922be9d37987dabac92
    }
}
