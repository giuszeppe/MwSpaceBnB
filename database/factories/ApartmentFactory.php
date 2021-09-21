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
            'indirizzo' => $this->faker->address(),
            'immagine' => $this->faker->imageUrl,
            'active' => 1,
            'latitude' => 0,
            'longitude' => 0,
            'id_user' => User::factory(),
            'servizi_aggiuntivi' => 'WiFi,Posto Auto'
        ];
    }
}
