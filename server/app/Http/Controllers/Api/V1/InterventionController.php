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
            'barrio_id' => $request->zone_id,
            'title' => $request->title,
            'description' => $request->description,
            'startDate'  => $request->startdate,
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


    public function update(Request $request, Intervention $Intervention)
    {
        try {
            $validator = Validator::make($request->all(), [
                'barrio_id' => 'required',
                'title' => 'required',
                'description' => 'required',
                'startDate' => 'required',
                'endDate' => 'required',
                'budget' => 'required',
                'status' => 'required'
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'status' => false,
                    'errors' => $validator->errors()->all()
                ], 400);
            }

            $Intervention->fill($request->all());


            $Intervention->save();

            return response()->json([
                'status' => true,
                'message' => 'Intervention updated successfully',
                'Intervention' => $Intervention,
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Failed to update Intervention.',
                'error' => $e->getMessage()
            ], 500);
        }
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