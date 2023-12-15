<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class defaultController extends Controller
{
    //

    public function index(Request $req){
        $req->validate([
            "emal" => "email"
        ]);

        app()->call([EmailController::class,"sendEmail"],["request" => $req]);
    }


}
