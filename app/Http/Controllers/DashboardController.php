<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Medication;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function Dashboard(){
    
   
    $kids = auth()->user()->kids()->get();
    $kid_count = $kids->count();

    
    $medications = Medication::whereIn('kid_id', $kids->pluck('id'))->get();
    $appointments = Appointment::whereIn('kid_id', $kids->pluck('id'))->get();

    $med_count = $medications->count();
    $app_count = $appointments->count();

   

    return view('Dashboard',compact(
        
        'kids','kid_count',
        'medications', 'med_count',
        'appointments', 'app_count'
        
        ));
    }
}
