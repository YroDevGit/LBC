<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\datas;

class cdata extends Controller
{
    public function index(){
        
    }

    public function react_datas(){
        $allData = datas::all();
        return response()->json($allData);
    }
}
