<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Models\Member_model;
use App\Models\emodel;
use App\Models\esubscribe;

class cflush extends Controller
{
    public function flushall(){
        $files = File::allFiles(public_path('storage/uploads'));
        foreach($files as $file){
            $filename = $file->getFilename();
            $result1 = $this->getMemberFiles($filename);
            $result2 = $this->getEventsFiles($filename);
            if($result1==0 && $result2==0){
                File::delete($file);
            }
        }
        return back()->with("flush","All unused files has been deleted");
        
    }

    public function getMemberFiles($filename){
        $file = Member_model::where([["img","=",$filename]])->get();
        $ret = 0;
        if($file->isNotEmpty()){
            $ret =1;
        }
        else{
            $ret =0;
        }
        return $ret;
    }

    public function getEventsFiles($filename){
        $file = emodel::where([["img","=",$filename]])->get();
        $ret = 0;
        if($file->isNotEmpty()){
            $ret =1;
        }
        else{
            $ret =0;
        }
        return $ret;
    }

}
