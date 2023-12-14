<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\emodel;

class events extends Controller
{
    public function addEvents(Request $req){
        $dt = new \DateTime();
        $file = $req->file("img");
        $newfile = "tr".$dt->format("YMdHim").".".$file->extension();
        $path = $file->storeAs("public/uploads",$newfile);
        emodel::insert([
            "etitle" => $req->input("title"),
            "address" => $req->input("address"),
            "img" => $newfile,
            "description" => $req->input("desc"),
            "datetime" => $req->input("datetime")
        ]);
        return back()->with("success","Event added");
    }
}
