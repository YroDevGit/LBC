<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\emodel;
use App\Models\member_model;
use App\Mail\MyEmail;


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
        events::notifyAll($req->input('title'),$req->input('address'),$req->input('datetime'));
        return back()->with("success","Event added");
    }

    public function notifyAll($title, $address, $datetime){
        $datas = member_model::where("stat","0")->get();
        $emails = [];
        foreach($datas as $data){
            $emails[] = $data->email;
        }
        $emailControll = new EmailController();
        $emailControll->notifyMe($emails,$title,$datetime,$address);
        
       
    }
}





