<?php

namespace App\Http\Controllers;
use App\Models\signin;

use Illuminate\Http\Request;

class login extends Controller
{
    public function login(Request $req){
        $user = $req->input('uname');
        $pass = $req->input('pass');

        $res = signin::where([
            ["username" , "=", $user],
            ["password", "=", $pass]
        ])->get();

        if($res->isNotEmpty()){
            return redirect("admin");
        }
        else{
            return back()->with("msg","Inavalid login credentials");
        }
        
    }
}
