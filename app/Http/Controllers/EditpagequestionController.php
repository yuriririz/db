<?php

namespace App\Http\Controllers;

use App\Models\Coures;
use App\Models\Contents;
use App\Models\questions;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Support\Facades\DB;

class EditpagequestionController extends Controller
{
    /////////////////////////////////////////

    ////แสดงผลหน้าเว็บไซต์
    // index
    public function index(){
 
        $questionShow= questions::all();
        return view('template.editpagequestion',compact('questionShow') );
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
