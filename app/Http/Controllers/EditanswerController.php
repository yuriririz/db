<?php

namespace App\Http\Controllers;

use App\Models\Coures;
use App\Models\Contents;
use App\Models\questions;
use App\Models\answers;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Support\Facades\DB;

class EditanswerController extends Controller
{
    /////////////////////////////////////////

    ////แสดงผลหน้าเว็บไซต์
    // index
    public function index(){
 
        $answerShow= answers::all();
        return view('template.editanswer',compact('answerShow') );
        // $coureList=Coures::all();
        // return view('template.editpage');
    }

    // show template coures

    public function destroy($id){

        Contents::destroy($id);
        return back();

        // $coureList=Coures::all();
        // return view('template.coures',compact('coureList'));
    }

////////////////////////////////////////////////////
///////////เพิ่มชื่อ คอร์ส
    // create
    
}
