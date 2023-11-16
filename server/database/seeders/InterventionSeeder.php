<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Intervention;

class InterventionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Intervention::create([
            "id" => 1,
            "barrio_id" => 3,
            "title" => "Evento 5",
            "description" => "Descripción del evento 5",
            "startDate" => "2022-02-02",
            "endDate" => "2023-12-12",
            "budget" => "100",
            "status" => "finished",
            "created_at" => "2023-11-16T21:04:38.000000Z",
            "updated_at" => "2023-11-16T21:04:38.000000Z"
        ]);
        
        Intervention::create([
            "id" => 2,
            "barrio_id" => 45,
            "title" => "Evento 7",
            "description" => "Descripción del evento 7",
            "startDate" => "2022-03-15",
            "endDate" => "2023-11-30",
            "budget" => "150",
            "status" => "ongoing",
            "created_at" => "2023-11-16T22:10:45.000000Z",
            "updated_at" => "2023-11-16T22:10:45.000000Z"
        ]);
        
        Intervention::create([
            "id" => 3,
            "barrio_id" => 12,
            "title" => "Evento 2",
            "description" => "Descripción del evento 2",
            "startDate" => "2022-04-20",
            "endDate" => "2023-10-10",
            "budget" => "200",
            "status" => "planned",
            "created_at" => "2023-11-16T23:30:20.000000Z",
            "updated_at" => "2023-11-16T23:30:20.000000Z"
        ]);
        
        Intervention::create([
            "id" => 4,
            "barrio_id" => 68,
            "title" => "Evento 9",
            "description" => "Descripción del evento 9",
            "startDate" => "2022-06-05",
            "endDate" => "2023-09-15",
            "budget" => "180",
            "status" => "cancelled",
            "created_at" => "2023-11-17T01:45:12.000000Z",
            "updated_at" => "2023-11-17T01:45:12.000000Z"
        ]);
        
        Intervention::create([
            "id" => 5,
            "barrio_id" => 33,
            "title" => "Evento 4",
            "description" => "Descripción del evento 4",
            "startDate" => "2022-08-12",
            "endDate" => "2023-08-30",
            "budget" => "120",
            "status" => "finished",
            "created_at" => "2023-11-17T03:20:55.000000Z",
            "updated_at" => "2023-11-17T03:20:55.000000Z"
        ]);
        
        Intervention::create([
            "id" => 6,
            "barrio_id" => 20,
            "title" => "Evento 8",
            "description" => "Descripción del evento 8",
            "startDate" => "2022-10-01",
            "endDate" => "2023-07-25",
            "budget" => "250",
            "status" => "ongoing",
            "created_at" => "2023-11-17T04:55:40.000000Z",
            "updated_at" => "2023-11-17T04:55:40.000000Z"
        ]);
        
        Intervention::create([
            "id" => 7,
            "barrio_id" => 55,
            "title" => "Evento 1",
            "description" => "Descripción del evento 1",
            "startDate" => "2022-12-03",
            "endDate" => "2023-06-20",
            "budget" => "180",
            "status" => "planned",
            "created_at" => "2023-11-17T06:30:25.000000Z",
            "updated_at" => "2023-11-17T06:30:25.000000Z"
        ]);
        
        Intervention::create([
            "id" => 8,
            "barrio_id" => 2,
            "title" => "Evento 6",
            "description" => "Descripción del evento 6",
            "startDate" => "2023-01-15",
            "endDate" => "2023-05-10",
            "budget" => "130",
            "status" => "cancelled",
            "created_at" => "2023-11-17T08:05:10.000000Z",
            "updated_at" => "2023-11-17T08:05:10.000000Z"
        ]);
        
        Intervention::create([
            "id" => 9,
            "barrio_id" => 70,
            "title" => "Evento 3",
            "description" => "Descripción del evento 3",
            "startDate" => "2023-03-22",
            "endDate" => "2023-04-15",
            "budget" => "160",
            "status" => "ongoing",
            "created_at" => "2023-11-17T09:40:02.000000Z",
            "updated_at" => "2023-11-17T09:40:02.000000Z"
        ]);
        
        Intervention::create([
            "id" => 10,
            "barrio_id" => 41,
            "title" => "Evento 10",
            "description" => "Descripción del evento 10",
            "startDate" => "2023-05-10",
            "endDate" => "2023-03-01",
            "budget" => "200",
            "status" => "finished",
            "created_at" => "2023-11-17T11:14:45.000000Z",
            "updated_at" => "2023-11-17T11:14:45.000000Z"
        ]);
        
    }
}
