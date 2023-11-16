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

    public function getCoordsFromAllBorough(){
        $boroughs = [
            "el Raval",
            "el Barri Gòtic",
            "la Barceloneta",
            "Sant Pere, Santa Caterina i la Ribera",
            "el Fort Pienc",
            "la Sagrada Família",
            "la Dreta de l'Eixample",
            "l'Antiga Esquerra de l'Eixample",
            "la Nova Esquerra de l'Eixample",
            "Sant Antoni",
            "el Poble-sec",
            "la Marina del Prat Vermell",
            "la Marina de Port",
            "la Font de la Guatlla",
            "Hostafrancs",
            "la Bordeta",
            "Sants - Badal",
            "Sants",
            "les Corts",
            "la Maternitat i Sant Ramon",
            "Pedralbes",
            "Vallvidrera, el Tibidabo i les Planes",
            "Sarrià",
            "les Tres Torres",
            "Sant Gervasi - la Bonanova",
            "Sant Gervasi - Galvany",
            "el Putxet i el Farró",
            "Vallcarca i els Penitents",
            "el Coll",
            "la Salut",
            "la Vila de Gràcia",
            "el Camp d'en Grassot i Gràcia Nova",
            "el Baix Guinardó",
            "Can Baró",
            "el Guinardó",
            "la Font d'en Fargues",
            "el Carmel",
            "la Teixonera",
            "Sant Genís dels Agudells",
            "Montbau",
            "la Vall d'Hebron",
            "la Clota",
            "Horta",
            "Vilapicina i la Torre Llobeta",
            "Porta",
            "el Turó de la Peira",
            "Can Peguera",
            "la Guineueta",
            "Canyelles",
            "les Roquetes",
            "Verdun",
            "la Prosperitat",
            "la Trinitat Nova",
            "Torre Baró",
            "Ciutat Meridiana",
            "Vallbona",
            "la Trinitat Vella",
            "Baró de Viver",
            "el Bon Pastor",
            "Sant Andreu",
            "la Sagrera",
            "el Congrés i els Indians",
            "Navas",
            "el Camp de l'Arpa del Clot",
            "el Clot",
            "el Parc i la Llacuna del Poblenou",
            "la Vila Olímpica del Poblenou",
            "el Poblenou",
            "Diagonal Mar i el Front Marítim del Poblenou",
            "el Besòs i el Maresme",
            "Provençals del Poblenou",
            "Sant Martí de Provençals",
            "la Verneda i la Pau"
        ];
        
        $info_borough = [];
        $count_all = Multipolygons::all()->count();
        
        foreach ($boroughs as $borough) {
            $info_borough[$borough] = [
                "coords" => [], // Inicializamos un array para almacenar las coordenadas
                "average_veg" => 1,
            ];
        
            for ($i = 1; $i <= $count_all; $i++) {
                $row = Multipolygons::where('name_borough', '=', $borough)->first();
        
                if ($row && $row->name_borough == $borough) {
                    $coords = json_decode($row->coords, true);
        
                    if (!in_array($coords, $info_borough[$borough]["coords"])) {
                        $info_borough[$borough]["coords"][] = $coords;
                    }
                }
            }
        }
        
        return $info_borough;
        
    }
}
