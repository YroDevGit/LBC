<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\member_model;
use App\Models\datas;
use App\Models\emodel;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class members extends Controller
{
    public function index(Request $req){
        return view("adm.members");
    }
    public function addMem(Request $req){
        $req->validate([
            "img" =>"image|mimes:png,jpg,gif|max:2048"
        ]);

        $img = $req->file('img');
        $fr = new \DateTime();
        $newfile = "img".$fr->format("Hmi").".".$img->extension();

        $path = $img->storeAs("public/uploads",$newfile);
        echo $path;
        $res = member_model::insert([
            'id'=>"dasd",
            'fullname' => $req->input('fullname'),
            'contact' => $req->input('contact'),
            'address' => $req->input('address'),
            'birth' => $req->input('bdate'),
            'email' => $req->input('email'),
            'img' => $newfile,
            'stat' => 0,
            'role' => $req->input('role')
        ]);

        

    }

    public function showHomepage(Request $req){
        
        $data = member_model::where("stat","0")->get();
        $counter = $data->isNotEmpty();
        $cdatas = datas::all();
        $firstrow = $cdatas->first();
        Session::put("userPhone",$firstrow->phone);

        $edata = DB::select("SELECT e.id, e.etitle, e.address, e.description, DATE_FORMAT(e.datetime,'%M %d %Y')'datetime',DATE_FORMAT(e.datetime,'%h:%i%p')'time',e.img FROM eventbl e");
        $hasEvent = "1";
     
        return view("home",['counter'=>$counter,'datas'=>$data, 'cdatas'=>$cdatas,'edata'=>$edata,'eevents'=>$hasEvent]) ; 
    }
}
