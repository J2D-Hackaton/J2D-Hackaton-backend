<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Intervention extends Model
{
    use HasFactory;

    protected $fillable = [
        'barrio_id',
        'title',
        'description',
        'startDate',  
        'endDate',
        'budget', 
        'status'     
    ];
}
