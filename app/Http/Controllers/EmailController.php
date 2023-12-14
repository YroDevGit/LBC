<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Mail\MyEmail;

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
}
