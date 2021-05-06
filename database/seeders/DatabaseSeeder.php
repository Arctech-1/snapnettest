<?php

namespace Database\Seeders;

use App\Models\Lga;
use App\Models\State;
use App\Models\Ward;
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
        $this->call([
            UserSeeder::class,
            StateSeeder::class,
            LgaSeeder::class,
            WardSeeder::class
        ]);
    }
}
