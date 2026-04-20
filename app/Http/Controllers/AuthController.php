<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function Show_register_page()
    {
        return view('Auth.register');
    }
        public function register(Request $request)
    {
      $validated = $request->validate([
            'name' => 'required|string|max:10',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
      ]);
      $user = User::create($validated);
      Auth::login($user);
      return redirect('/Dashboard');
    }
    //login-----------------------------------------------
    public function Show_login_page()
    {
        return view('Auth.login');
    }
   
 
}
