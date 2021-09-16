<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Message::factory()->count(10)->create();
        $this->call([
            UserSeeder::class,
            ApartmentSeeder::class,
            MessageSeeder::class,
            ServiziSeeder::class,
        ]);
    }
}
