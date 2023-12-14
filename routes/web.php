<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\members;
use App\Http\Controllers\login;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\events;
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

Route::get("",[members::class,"showHomepage"]);

Route::get("login",function(){
return view("login");
});
Route::get("home",function(){
    return view('home');
})->name("home");
Route::get("about",function(){
return view("about");
});
Route::get("admin",function(){
    return view("adm.dashboard");
});
Route::get("admin/members",[members::class,"index"])->name("mem");
Route::post("log_in",[login::class,"login"])->name('log');

Route::post("add_memB",function(Request $req){
    $ruser = $req->input('fullname');
    Session::put("thefullname",$ruser);
    app()->call([EmailController::class,"sendEmailMember"]);
    app()->call([members::class,"addMem"]);
    return back()->with("success","Successfully added a member");
})->name('addmem');

Route::get("log_out",function(){
    return redirect("");
})->name("logout");
Route::get("testimonials",[members::class,"showMembers"]);

Route::get("sendMail",[EmailController::class,"sendEmailMember"]);
Route::get("events",function(){
    return view("adm.events");
});

Route::post("Addnew",[events::class,"addEvents"])->name("addevt");



