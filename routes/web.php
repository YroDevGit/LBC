<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\members;
use App\Http\Controllers\subscribe;
use App\Http\Controllers\login;
use App\Http\Controllers\cdata;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\events;
use App\Http\Controllers\cflush;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get("pages", function(){
    
});

//Homepage
Route::get("",[members::class,"showHomepage"]);
Route::get("homepage",[members::class,"showHomepage"])->name("homepage");
Route::get("tyrone",function(){
return view('new');
});

//Login
Route::get("login",function(){
return view("login");
});

//Home
Route::get("home",function(){
    return view('home');
})->name("home");

//about us page
Route::get("about",function(){
return view("about");
});

//admin page dashboard
Route::get("admin",function(){
    return view("adm.dashboard");
})->name('admin');

//members page
Route::get("admin/members",[members::class,"index"])->name("mem");
Route::get("api/datas",[cdata::class,'react_datas']);


//logout
Route::get("log_out",function(){
    return redirect("");
})->name("logout");

//Testimonials page
Route::get("testimonials",[members::class,"showMembers"]);

//Send email
Route::get("sendMail",[EmailController::class,"sendEmailMember"]);

//events page
Route::get("admin/events",function(){
    return view("adm.events");
})->name('events');


Route::get("aboutUs", function(){
    return view("about");
})->name('about');
Route::get("admin/dashboard",function(){
    return view('adm.dashboard');
})->name("dashboard");

//To register page
Route::get("registration", function(){
return view("register");
})->name("register");

Route::get("admin/flush", function(){
    return view("adm.flush");
})->name("flush");
Route::get("/admin/allUsers", function(){
    return view("adm.users");
})->name("users");

Route::get("admin/flushall",[cflush::class,"flushall"])->name('flusher');

Route::get("/admin/searchtbl",[members::class,"searchUsers"]);

Route::get("/admin/verify",[members::class,"verifyUser"]);



/*post area*/

//Post login
Route::post("log_in",[login::class,"login"])->name('log');

//Post add members
Route::post("add_memB",function(Request $req){
    $ruser = $req->input('fullname');
    Session::put("thefullname",$ruser);
    app()->call([EmailController::class,"sendEmailMember"]);
    app()->call([members::class,"addMem"]);
    return back()->with("success","Successfully added a member");
})->name('addmem');

// Add event
Route::post("Addnew",[events::class,"addEvents"])->name("addevt");
Route::post("AddEmailSubscribe",function(){
    app()->call([EmailController::class,"sendSubscribe"]);
    app()->call([subscribe::class,"subscribe"]);
    return back()->with("subscribe","Your email now received updates");
})->name("addSubscribe");

Route::post("Member/Join",[members::class,"joinUs"])->name('memberjoin');






