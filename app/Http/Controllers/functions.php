<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class functions extends Controller
{
    public function getDateFormat($date){
        $dbdate = DB::select("select DATE_FORMAT('$date','%M %d %Y') as 'fulldate'");
        $ret = "";
        foreach($dbdate as $db){
            $ret = $db->fulldate;
        }
        return $ret;
    }
}
