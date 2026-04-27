<?php

namespace App\Http\Controllers;

use App\Models\Kid;
use Illuminate\Http\Request;

class KidsController extends Controller
{
    public function show_kids_page(){
        return view('Kids');
    }
   
}
