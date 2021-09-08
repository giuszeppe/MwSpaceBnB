<?php

namespace Database\Factories;

use App\Models\Apartment;
use App\Models\Message;
use Illuminate\Database\Eloquent\Factories\Factory;

class MessageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Message::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'corpo' => $this->faker->text(),
            'email_mittente' => $this->faker->freeEmail(),
            'id_appartamento' => Apartment::factory(),
        ];
    }
}
