<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Mail\MyEmail;
use App\Mail\subscription;
use App\Mail\notify;

use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function sendEmailMember(Request $req){
        $sub = "Registration";
        $message = $req->input('fullname');
        $email = $req->input('email');
        $fullMessage = "Hello <b>".$message."</b>, You are now registered as a member of <b>Libacao Baptis Church</b>";
        Mail::to($email)->send(new MyEmail($sub, $fullMessage));
    }

    public function sendSubscribe(Request $req){
        $req -> validate([
            "email" => "email"
        ]);
        $email = $req->input("email");
        Mail::to($email)->send(new subscription("Subscribe", "sub"));
    }

    public function notifyMe($email,$subject,$message,$address){
        $functions = new functions();
        $fulldate = $functions->getDateFormat($message);
        Mail::to($email)->send(new notify($subject, $fulldate));
        session(["address"=>$address]); 
    }

   
    public function sendEmail($email, $subject, $message){
        Mail::to($email)->send(new subscription($subject, $message));
    }
}
