<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Intervention;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class InterventionController extends Controller
{
    public function index()
    {
        $Interventions = Intervention::all();
        return  response($Interventions, 200);
    }


    public function store(Request $request)
    {
        $request->validate([
            'barrio_id' => 'required',
            'title' => 'required',
            'description' => 'required',
            'startDate' => 'required',
            'endDate' => 'required',
            'budget' => 'required',
            'status' => 'required'
        ]);

        Intervention::create([
            'barrio_id' => $request->barrio_id,
            'title' => $request->title,
            'description' => $request->description,
            'startDate'  => $request->startDate,
            'endDate' => $request->endDate,
            'budget' => $request->budget,
            'status' => $request->status,

        ]);

        return response([
            'message' => 'Intervention created successfully'
        ], 201);
    }


    public function show($id)
    {
        $Intervention = Intervention::findOrFail($id);

        if (!$Intervention) {

            return response(['message' => 'Intervention not found'], 404);
        } else {
            return response($Intervention, 200);
        }
    }


    public function update(Request $request, $id)
    {
        $Intervention = Intervention::findOrFail($id);
        $Intervention->update([
            'barrio_id' => $request->barrio_id,
            'title' => $request->title,
            'description' => $request->description,
            'startDate'  => $request->startDate,
            'endDate' => $request->endDate,
            'budget' => $request->budget,
            'status' => $request->status,
        ]);

        return response([
            'message' => 'Intervention updated successfully'
        ], 201);
    }


    public function destroy($id)
    {
        $Intervention = Intervention::findOrFail($id);

        if ($Intervention) {

            $Intervention->delete();

            return response(['message' => 'Intervention deleted succesfully'], 200);
        } else {
            return response(['message' => 'Intervention not found'], 404);
        }
    }
}