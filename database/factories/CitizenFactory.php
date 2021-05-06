<?php

namespace Database\Factories;

use App\Models\Citizen;
use Illuminate\Database\Eloquent\Factories\Factory;

class CitizenFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Citizen::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $gender = $this->faker->randomElement(['male', 'female']);
        return [
            'name' => $this->faker->name($gender),
            'gender' => $gender,
            'address' => $this->faker->streetAddress,
            'phone' => $this->faker->PhoneNumber,
        ];
    }
}
