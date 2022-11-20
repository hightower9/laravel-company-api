<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'             => fake()->company(),
            'address'          => fake()->address(),
            'contact'          => fake()->e164PhoneNumber(),
            'email'            => fake()->unique()->safeEmail(),
            'established_date' => fake()->date()
        ];
    }
}
