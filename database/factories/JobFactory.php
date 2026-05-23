<?php

namespace Database\Factories;

use App\Models\Job;
use Illuminate\Database\Eloquent\Factories\Factory;

use function Laravel\Prompts\title;

/**
 * @extends Factory<Job>
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
            'title' =>fake()->jobTitle(),
            'description'=>fake()->paragraph(),
            'company'=> fake()->company(),
            'location'=>fake()->city(),
            'salary'=>fake()->randomFloat(2, 50000, 150000),

        ];  
    }
}
