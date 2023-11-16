<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Intervention>
 */
class InterventionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'barrio_id' => '1',
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,            
            'startDate' => $this->faker->date,
            'endDate' => $this->faker->date,                      
            'budget' => $this->faker->randomNumber(),
            'status' => '1'
        ];
    }
}
