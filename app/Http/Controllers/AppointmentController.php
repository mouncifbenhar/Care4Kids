<?php

namespace App\Http\Controllers;

use Faker\Provider\Company;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function Appointments_page($kid){
         $child = auth()->user()->kids()->findOrFail($kid);
         return view('Appointment',compact('child'));
    }
}
