<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = [
        'kid_id',
        'doctor_name',
        'specialty',
        'appointment_date',
        'location',
        'reason',
        'notes',
        'is_completed'
    ];
    public function kid()
    { 
    return $this->belongsTo(Kid::class,'kid_id');
    }
}
