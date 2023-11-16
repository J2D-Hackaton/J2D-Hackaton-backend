<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Multipolygons extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_borough',
        'code_borough',
        'name_district',
        'code_district',
        'code_census',
        'action_index',
        'vegetation_index',
        'vulnerability_index',
        'coords'
    ];

}
