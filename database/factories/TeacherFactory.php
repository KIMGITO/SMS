<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Teacher>
 */
class TeacherFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'first_name' => $this->faker->firstName(),
            'middle_name' => $this->faker->lastName(),
            'last_name' => $this->faker->lastName(),
            'gender' => $this->faker->randomElement(['male', 'female']),
            'id_number' => $this->faker->randomNumber(9),
            'tsc_number' => $this->faker->randomNumber(9),
            'email' => $this->faker->email(),
            'phone_number' => $this->faker->phoneNumber(),
            'major' => $this->faker->word(),
            'minor' => $this->faker->word(),
        ];
    }
}
