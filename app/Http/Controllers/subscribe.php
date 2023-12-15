<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\esubscribe;

class subscribe extends Controller
{
    
    public function subscribe(Request $req){
        $req->validate([
            "email" => "email"
        ]);
        esubscribe::insert([
            "email" => $req -> input('email'),
            "s_date" => now()
        ]);
        //return back()->with("subscribe","Your email now received updates");
    }

    

}
