<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ApartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        $n_stanze = 10;
        DB::table('apartments')->insert([
            'title' => 'Appartamento Comodo',
            'numero_stanze' => $n_stanze,
            'numero_bagni' => ceil($n_stanze / rand(3, 10)),
            'numero_letti' => rand(1, 6),
            'metri_quadrati' => $n_stanze * rand(40, 80),
            'indirizzo' => "Via Pietro Vannucci, 53",
            'immagine' => $faker->imageUrl,
            'active' => rand(0, 1),
            'latitude' => 43.1,
            'longitude' => 12.2883,
            'id_user' => 1,
            'servizi_aggiuntivi' => 'Wi-fi,Posto auto'
        ]);
    }
}
