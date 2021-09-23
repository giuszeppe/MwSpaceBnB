<?php

namespace Database\Factories;

use App\Models\Apartment;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ApartmentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Apartment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $n_stanze = rand(3, 10);
        return [
            'title' => 'Appartamento Comodo',
            'numero_stanze' => $n_stanze,
            'numero_bagni' => ceil($n_stanze / rand(3, 10)),
            'numero_letti' => rand(1, 6),
            'metri_quadrati' => $n_stanze * rand(40, 80),
            'indirizzo' => 'Via Camillo Bozza, Il Rigo, Corciano, Perugia, Umbria, Italia, IT',
            'immagine' => $this->faker->imageUrl,
            'active' => rand(0, 1),
            'latitude' => 43.0998,
            'longitude' => 12.3024559,
            'id_user' => User::factory(),
            'servizi_aggiuntivi' => 'Wi-fi,Posto auto'
        ];
    }
}
