<?php

namespace Database\Factories;

use App\Models\Person;
use Illuminate\Database\Eloquent\Factories\Factory;

class PersonFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Person::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'age' => $this->faker->numberBetween(1, 70),
            'cpf' => $this->faker->unique()->randomNumber(),
            'cep' => $this->faker->randomNumber(),
            'street' => $this->faker->streetName(),
            'neighborhood' => $this->faker->name(),
            'city' => $this->faker->city(),
            'house_number' => $this->faker->randomDigit(),
            'phone' => $this->faker->phoneNumber(),
        ];
    }
}
