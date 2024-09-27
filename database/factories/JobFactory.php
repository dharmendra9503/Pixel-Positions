<?php

namespace Database\Factories;

use App\Models\Employer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'employer_id' => Employer::factory(),
            'title' => fake()->jobTitle,
            'salary' => fake()->randomElement(['45000 INR', '50000 INR', '55000 INR', '60000 INR', '65000 INR', '100000 INR']),
            'location' => fake()->city,
            'schedule' => fake()->randomElement(['Full Time', 'Part Time', 'Contract', 'Temporary', 'Internship']),
            'url' => fake()->url,
            'featured' => fake()->boolean,
        ];
    }
}
