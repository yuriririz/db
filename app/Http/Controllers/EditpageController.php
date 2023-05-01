<?php

namespace App\Http\Controllers;

use App\Models\Coures;
use App\Models\Contents;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Support\Facades\DB;

class EditpageController extends Controller
{
    /////////////////////////////////////////

    ////แสดงผลหน้าเว็บไซต์
    // index
    public function index(){
 
        // $contentShow= Contents::all();
        // return view('template.coures',compact('contentShow') );
        $coureList=Coures::all();
        return view('template.editpage');
    }

    // show template coures

    public function show(){

        // $coureList=Coures::all();
        // return view('template.coures',compact('coureList'));
    }

////////////////////////////////////////////////////
///////////เพิ่มชื่อ คอร์ส
    // create
    
}
