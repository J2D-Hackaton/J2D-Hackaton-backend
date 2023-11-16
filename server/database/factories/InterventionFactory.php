<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Intervention;
use Faker\Factory as Faker;

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
    public function definition()
    {
        $faker = Faker::create();
        // Crear 10 registros con barrio_id no superior a 73
        for ($i = 1; $i <= 1000; $i++) {
            Intervention::create([
                "id" => $i,
                "barrio_id" => rand(1, 73),
                "title" => $faker->sentence,
                "description" => $faker->text(200),
                "startDate" => now()->addDays($i),
                "endDate" => now()->addDays($i + 30),
                "budget" => rand(100, 1000),
                "status" => ($i % 2 == 0) ? 'finished' : 'ongoing',
                "created_at" => now(),
                "updated_at" => now(),
            ]);
        }
    }
}
