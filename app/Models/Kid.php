<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kid extends Model
{
    protected $fillable = [
        'user_id',
        'name',
        'gender',
        'birth_date',
        'height',
        'weight',
        'blood_type',
        'has_special_case',
        'special_case_details'
    ];
    protected $casts = [
    'birth_date' => 'date',
    ];


    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
      public function medicalRecords()
    {
        return $this->hasMany(MedicalRecord::class);
    }
    public function vaccines()
    {
        return $this->belongsToMany(Vaccine::class, 'kid_vaccine')
                    ->withTimestamps();
    }
    public function medications(){
    return $this->hasMany(Medication::class);
    }
     
    public function appointments()
    {
    return $this->hasMany(Appointment::class);
    }
}
