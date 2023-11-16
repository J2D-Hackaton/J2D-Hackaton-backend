<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Multipolygons;

class MultipolygonController extends Controller
{
    public function getAllMultipolygons(){

        $allMultipolygons = Multipolygons::all();

        if(!$allMultipolygons){
            return response()->json(["message" => "Not found!"], 404);
        }

        return response()->json(["multipolygons" => $allMultipolygons], 200);
    }

    public function getBoroughs(){
        $allBoroughs = Multipolygons::select('name_borough')->get();
        return $allBoroughs;
    }

    public function getDistricts(){

    }
}
