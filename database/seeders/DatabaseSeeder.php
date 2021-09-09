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
        $n_stanze = 10;
        DB::table('users')->insert([
            'name' => 'user',
            'surname' => 'user',
            'birthday' => Carbon::today(),
            'email' => 'test@test.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);
        DB::table('apartments')->insert([
            'title' => 'Appartamento Comodo',
            'numero_stanze' => $n_stanze,
            'numero_bagni' => ceil($n_stanze / rand(3, 10)),
            'numero_letti' => rand(1, 6),
            'metri_quadrati' => $n_stanze * rand(40, 80),
            'indirizzo' => "Via Pietro Vannucci, 53",
            'immagine' => "img",
            'active' => rand(0, 1),
            'latitude' => 0,
            'longitude' => 0,
            'id_user' => 1,
            'servizi_aggiuntivi' => 'WiFi,Posto Auto'
        ]);
        DB::table('messages')->insert([
            'corpo' => "Vorrei saperne di più",
            'email_mittente' => "test@mittente.com",
            'id_appartamento' => 1,
        ]);
        \App\Models\Message::factory()->count(10)->create();
    }
}
