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
    public function add_appointment(Request $request, $child)
{
   
    $validated = $request->validate([
        'doctor_name'      => 'nullable|string|max:255',
        'specialty'        => 'nullable|string|max:100',
        'appointment_date' => 'required|date|after:now', 
        'location'         => 'nullable|string|max:255',
        'reason'           => 'nullable|string|max:1000',
        'notes'            => 'nullable|string|max:1000'
    ]);

    $child = auth()->user()->kids()->findOrFail($child);
    $child->appointments()->create($validated);
   
    return back()->with('success_appointment', ' added Appointments successfully');
}
}
