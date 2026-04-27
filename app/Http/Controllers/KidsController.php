<?php

namespace App\Http\Controllers;

use App\Models\Kid;
use Illuminate\Http\Request;

class KidsController extends Controller
{
    public function show_kids_page(){
        return view('Kids');
    }
    public function add_kid(Request $request){
    $validated = $request->validate([
               'name' => 'required|string|max:255',
               'gender' => 'required|in:female,male', 
               'birth_date' => 'required|date|before:today', 
               'height' => 'required|numeric|min:15|max:200', 
               'weight' => 'required|numeric|min:1|max:150',  
               'blood_type' => 'required|in:A+,O+,B+,AB+,A-,O-,B-,AB-', 
               'has_special_case' => 'boolean',
               'special_case_details' => 'required_if:has_special_case,1|nullable|string|min:5', 

    ]);
    $validated['user_id'] = auth()->id();
    Kid::create($validated);
    return redirect()->back()->with('success', 'You hade add your kid successfully');
    }
    //--------------------------------------------------------------------------------------

   
}
