<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MedicalRecord extends Model
{
    protected $fillable = [
        'kid_id',
        'weight' ,
        'height', 
        'notes',
        'diagnosis'
    ];

    
}
