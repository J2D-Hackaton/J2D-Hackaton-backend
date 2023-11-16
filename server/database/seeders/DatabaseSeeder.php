<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\MultiPolygonSeeder;
use App\Models\Intervention;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(MultiPolygonSeeder::class);
        // $this->call(InterventionSeeder::class);
        Intervention::factory()->create(); // create 9 clients
    }
}
