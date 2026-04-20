<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function profile(){
          return view('profile');
    }
      public function update_profile(Request $request){
        $user = Auth::user();
          $Validated = $request->validate([
              'name' => 'required|string|max:10',
              'password' => 'nullable|min:8'
          ]);
          
        $user->name = $Validated['name'];
        if(!empty($Validated['password'])){
            $user->password = Hash::make($Validated['password']);
        }
        $user->save();
        return redirect()->back()->with('success', 'Profile updated successfully');
    }
}
