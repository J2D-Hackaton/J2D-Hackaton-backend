<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
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

    


    public function vegetationMedianBorough($code){

        //$code = $request -> code_borough;

        $allMultipolygons = Multipolygons::all();

        $areasBorough = array();

        foreach($allMultipolygons as $multipolygon) {

            if($multipolygon -> code_borough == $code){

                array_push($areasBorough, $multipolygon);

            };
        };

        /*if(!$areasBorough){
            return response()->json(["message" => "Not found!"], 404);
        }

        $numberOfAreas =  count($areasBorough);
        $sum = 0;

        foreach($areasBorough as $area){

            $vi= $area -> vegetation_index;
            $sum += $vi;

            return $sum;
        };

       $vegetationIndexMedian = $sum / $numberOfAreas;*/

        return response()->json([
            'areasBorough' => $areasBorough,
            'status' => 200  
        ]);

       //return  $vegetationIndexMedian;

    }


    public function vulnerabilityIndexMedianBorough(Request $request){

        $name = $request -> name;
        $areasBorough = Multipolygons::where('name_borough', $name) -> get();

        if(!$areasBorough){
            return response()->json(["message" => "Not found!"], 404);
        };

        $numberOfAreas =  count($areasBorough);
        $sum = 0;

        foreach($areasBorough as $area){

            $vi= $area -> vulnerability_index;
            $sum += $vi;

            return $sum;
        };

       $vulnerabilityIndexMedian = $sum / $numberOfAreas;

       return  $vulnerabilityIndexMedian;

    }

    
}
