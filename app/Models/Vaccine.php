<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vaccine extends Model
{
    protected $fillable = [
        'name', 
        'target_age_months', 
        'description'
        ];
    
        public function Kids(){
            return $this->belongsToMany(Kid::class, 'kid_vaccine')->withTimestamps();
        }
    
}
