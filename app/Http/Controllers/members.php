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

    public function joinUs(Request $req){
        $req->validate([
            "img" =>"image|mimes:png,jpg,gif|max:2048"
        ]);

        $img = $req->file('img');
        $fr = new \DateTime();
        $newfile = "img".$fr->format("Hmi").".".$img->extension();

        $path = $img->storeAs("public/uploads",$newfile);
        echo $path;
        $res = member_model::insert([
            'fullname' => $req->input('fullname'),
            'contact' => $req->input('contact'),
            'address' => $req->input('address'),
            'birth' => $req->input('bdate'),
            'email' => $req->input('email'),
            'img' => $newfile,
            'stat' => 1,
            'role' => $req->input('role'),
            'message' => $req->input("message")
        ]);  
        return back()->with('joined',"You have sent you membership request, You will received an email about your registration updates");
    }

    public function confirmMember(Request $req){
        $member_id = $req->input("memid");
        member_model::where("id","=",$member_id)->update([
            "stat" => 0
        ]);
    }

    public function showHomepage(Request $req){
        
        $data = member_model::where("stat","0")->get();
        $counter = $data->isNotEmpty();
        $cdatas = datas::all();
        $firstrow = $cdatas->first();
        Session::put("userPhone",$firstrow->phone);

        $edata = DB::select("SELECT e.id, e.etitle, e.address, e.description, DATE_FORMAT(e.datetime,'%M %d %Y')'datetime',DATE_FORMAT(e.datetime,'%h:%i%p')'time',e.img FROM eventbl e");
        $hasEvent = 0;
        if(!empty($edata)){
            $hasEvent =1;
        }
        else{
            $hasEvent = 0;
        }
     
        return view("home",['counter'=>$counter,'datas'=>$data, 'cdatas'=>$cdatas,'edata'=>$edata,'eevents'=>$hasEvent]) ; 
    }

    public function searchUsers(Request $req){
        $value = $req->input('q');
        $query = "SELECT m.id, m.fullname, m.contact, m.address, DATE_FORMAT(m.birth,'%M %d %Y')'fulldate',m.email,m.img,m.stat,m.role,m.message FROM memberstbl m WHERE m.fullname LIKE '%$value%'";
        $data = DB::select($query);
        return view("adm.extensions.userstbl",["data"=>$data]);
    }

    public function verifyUser(Request $req){
        $users = $req->users;
        $result = member_model::where([
            "stat" => "1",
            "id" => $users,
        ])->update([
            "stat" => "0"
        ]);
        return back()->with("success","Data successfully updated");
    }
}




?>