<?php

namespace Tests\Feature\Api\v1;

use App\Models\Intervention;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class InterventionTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    public function setUp(): void
    {
        parent::setUp();
        $this->artisan('passport:install');
    }

    public function test_can_get_all_interventions()
    {
        Intervention::factory()->count(5)->create();

        $response = $this->get('/api/v1/interventions');

        $response->assertStatus(200)
            ->assertJsonStructure([
                'status',
                'data' => [
                    '*' => [
                        'id',
                        'barrio_id',
                        'title',
                        'description',
                        'startDate',
                        'endDate',
                        'budget',
                        'status'
                    ],
                ],
            ]);
    }

    public function test_can_get_intervention_by_id()
    {
        $intervention = Intervention::factory()->create();

        $response = $this->get('/api/v1/intervention/' . $intervention->id);

        $response->assertStatus(200)
            ->assertJsonStructure([
                'status',
                'data' => [
                    'id',
                    'barrio_id',
                    'title',
                    'description',
                    'startDate',
                    'endDate',
                    'budget',
                    'status'
                ],
            ]);
    }
}
