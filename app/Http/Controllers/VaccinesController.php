<?php

namespace App\Http\Controllers;

use App\Models\Vaccine;
use App\Notifications\VaccineReminder;
use Symfony\Component\HttpFoundation\Request;

class VaccinesController extends Controller
{
   public function take_vaccine(Request $request, $child) {

    if (!$request->vaccine_id) {
        return redirect()->back()->with('error_vaccine', 'you have to select vaccine');
    }

    $child = auth()->user()->kids()->findOrFail($child);

    $vaccine = Vaccine::findOrFail($request->vaccine_id);

    $child->vaccines()->syncWithoutDetaching($request->vaccine_id); 

    
    auth()->user()->notify(new VaccineReminder($vaccine, $child->name));
    
    return redirect()->back()->with('success_vaccine', 'vaccine added successfully');
}
    
public function markAsRead(){
    auth()->user()->unreadNotifications->markAsRead();
    return redirect()->back();
}
}
