<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contents;
use App\Models\Coures;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Http;
use Symfony\Component\HttpKernel\UriSigner;
use Illuminate\Support\Facades\Storage;
class ContentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // ดึงข้อมูลมาจาก table coures และส่งค่าออกไปให้ dorwdown ใช้ compact
        $coureList=Coures::all();

        return view('template.content',compact('coureList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //




    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,Coures $coures)
    {
        //
        // จับคู่ coures กับ content

        $content = Contents::where('coure_id',$coures->id);


        $request->validate([
            'coure_id' => 'required',

            'contentname' => 'required|string',

            'video' => 'required|string',
            // 'image' => '',
            'content_text' => 'required|string'


        ],
        [
            'coure_id.required' => "กรุณาใส่ซื่อคอร์ส",
        ]

    );

        // $file = $request->input('image');
         $file2 = $request->input('video');



        if($file2== null){
            $mess =('กรุณา ใส่ข้อมูล URL Video');
            echo($mess);
            // alert()->error('กรุณา ใส่ข้อมูล URL Video')->persistent('ปิด')->autoclose();
            return redirect()->back()->with('กรุณา ใส่ข้อมูล URL Video');

                 // สำหรับ upload video
        }else{
            // $ext2 = $file2->extension();
            // $fileName2 = date('dmYHis').'.'.$ext2;
            // $path2 = public_path().'/assets/videos';

            // $file2->move($path2,$fileName2);
            // $urlV = Storage::temporaryUrl($file2, now()->addMinutes(5));

            $content = new Contents();
            $content->coure_id = $coures->id; // get id from Pk coures table
            $content->coure_id = $request->input('coure_id');

            $content->contentname= $request->input('contentname');
            $content->video = $request->input('video');
            $content->content_text = $request->input('content_text');

            $content->save();

        // }else{
        //       // สำหรับ upload image
        //     // $ext = $file->extension();
        //     // $fileName = date('dmYHis').'.'.$ext;
        //     // $path = url().'/assets/images';
        //     // $file->move($path,$fileName);
        //     // $url = Storage::url($file);

        //     //  // สำหรับ upload video
        //     // $file2 = $content-> $request->file('video');
        //     // $destinationPath = "public/assets/videos";

        //     // $ext2 = $file2->extension();
        //     // $fileName2 = date('dmYHis').'.'.$ext2;
        //     // $path2 = url().'/assets/videos';

        //     // $file2->move($path2,$fileName2);
        //     // $urlV = Storage::url($file2);
        //         /// ส่วน save ข้อมูล ลง DB
        //     $content = new Contents();
        //     $content->coure_id = $coures->id; // get id from Pk coures table
        //     $content->coure_id = $request->input('coure_id');
        //     $content->contentname = $request->input('contentname');
        //     $content->video =$request->input('video');
        //     $content->image = $request->input('image');
        //     $content->content_text = $request->input('content_text');
        //     // save data to DB
        //     $content->save();
        return redirect()->back()->with('success', 'content create Successfully.');
        }






    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
