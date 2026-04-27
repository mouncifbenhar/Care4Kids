<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Medication extends Model
{
  protected $fillable = [
    'kid_id',
    'name',
    'dosage',
    'first_dose_time',
    'interval_hours',
    'start_date',
    'end_date',
    'frequency',
    'notes',
];



}
