<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MedicationController extends Controller
{
   public function add_medication(Request $request, $child){
    $validated = $request->validate([
    'name' => 'required|string|max:255',
    'dosage' => 'nullable|string|max:100',
    'first_dose_time' => 'required|date_format:H:i', 
    'interval_hours' => 'required|integer|min:1|max:24', 
    'start_date' => 'required|date|after_or_equal:today', 
    'end_date' => 'required|date|after_or_equal:start_date', 
    'frequency' => 'nullable|string|max:100', 
    'notes' => 'nullable|string|max:1000',
    ]);

   
    $child = auth()->user()->kids()->findOrFail($child);
    $child->medications()->create($validated);

    return back()->with('success_medication', 'Medication added successfully');
}

}
