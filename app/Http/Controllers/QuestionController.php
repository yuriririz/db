<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\Models\Coures;
use App\Models\Questions;
use App\Models\Answers;
use Illuminate\Console\View\Components\Alert;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $coureList=Coures::all();
        return view('template.quiz_Aswer',compact('coureList'));
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
         // จับคู่ coures กับ question
        $question = Questions::where('coure_id',$coures->id);
        // $answer = Answers::where('question_id',$question->id);
         $request->validate([
             'coure_id' => '',
             // question
             'questionText' => '',
             'questionVideo' => '',
             'nameQuizV'=> '',

         ]);

        $file = $request->input('questionVideo');
        $detailsVideo = $request->input('nameQuizV');
        $quizText = $request->input('questionText');

        // if($quizText && $detailsVideo == null){
        //     $mess =('กรุณา ใส่ข้อมูล อย่างใดอย่างหนึ่ง');
        //     echo($mess);
        //     // alert()->error('กรุณา ใส่ข้อมูล อย่างใดอย่างหนึ่ง')->persistent('ปิด')->autoclose();
        //     return redirect()->route('showquiz')->with('errorMessageNull','กรุณา ใส่ข้อมูล อย่างใดอย่างหนึ่ง!!!!');
        // }
        if($quizText && $detailsVideo  != null){
            $mess =('กรุณา ใส่ข้อมูล อย่างใดอย่างหนึ่ง');
            echo($mess);
            // alert()->error('กรุณา ใส่ข้อมูล อย่างใดอย่างหนึ่ง')->persistent('ปิด')->autoclose();
            return redirect()->route('showquiz')->with('errorMessageNotNull','กรุณา ใส่ข้อมูล อย่าใส่ข้อมูลพร้อมกัน');

        }
        elseif($file == null){
            if($quizText != Null){
            $question = new Questions();
            $question->coure_id = $coures->id; // get id from Pk coures table
            $question->coure_id = $request->input('coure_id');
            $question->questionText = $request->input('questionText');
            $question->save();
        }else{
            return redirect()->route('showquiz')->with('MessageQuizText','กรุณา ตั้งคำถามได้ ครั้งละ 1 ประเภท นะ ');

        }
        }
        elseif($quizText == null){
            if($file != Null){
            $question = new Questions();
            $question->coure_id = $coures->id; // get id from Pk coures table
            $question->coure_id = $request->input('coure_id');

            $question->questionVideo = $request->input('questionVideo');
            $question->video_details = $request->input('nameQuizV');

            $question->save();
        }else{
            return redirect()->route('showquiz')->with('MessageQuizVideo','กรุณา ใส่ URL Video ด้วย!');
        }
        }else {
            $mess =('กรุณา ใส่ข้อมูล อย่างใดอย่างหนึ่ง');
            echo($mess);
            // alert()->error('กรุณา ใส่ข้อมูล อย่างใดอย่างหนึ่ง')->persistent('ปิด')->autoclose();
            return redirect()->route('showquiz')->with('กรุณา ใส่ข้อมูล อย่างใดอย่างหนึ่ง');

        }


        return redirect()->route('showanswer')->with('success', 'question create Successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Questions  $question
     * @return \Illuminate\Http\Response
     */
    public function show(Questions $questions)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Questions  $question
     * @return \Illuminate\Http\Response
     */
    public function edit(Questions $questions)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Questions  $question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Questions $questions)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy(Questions $question)
    {
        //
    }
}
