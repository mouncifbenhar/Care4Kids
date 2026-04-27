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

}
