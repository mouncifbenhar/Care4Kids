<?php

namespace App\Http\Controllers;

use App\Models\Vaccine;
use Illuminate\Http\Request;

class MedicalRecordController extends Controller 
{
    public function SHow_MedicalRecord_page($kid){


    $child = auth()->user()->kids()->findOrFail($kid);

    $currentAge = $child->birth_date->diffInMonths(now()); 

    $doneVaccinesIds = $child->vaccines()->pluck('vaccines.id');

    $validVaccines = Vaccine::where('target_age_months','<=',$currentAge)->whereNotIn('id', $doneVaccinesIds)->get();
        return view('Medical_Folder',compact('validVaccines','child'));
    }
    
   public function Save_Record(Request $request, $child)
   {
    $child = auth()->user()->kids()->findOrFail($child);

    $validated = $request->validate([
        'weight' => 'required|numeric|min:0|max:100',
        'height' => 'required|numeric|min:0|max:170',
        'notes' => 'nullable|string|max:1000',
        'diagnosis' => 'nullable|string|max:255',
    ]);

    $child->medicalRecords()->create($validated);
    return redirect()->back()->with('success', 'Record added successfully');
   }
}
