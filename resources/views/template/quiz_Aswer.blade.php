@extends('template.layout')

@section('quizAswer')

<div>
    <form class="row gy-2 gx-3 align-items-center" method="post" action="{{ route('createquiz') }}" enctype="multipart/form-data">
        @csrf

        <h3>สร้างข้อสอบหลังเรียน</h3>

        @if(session("errorMessageNull"))
        <div class="alert alert-danger">{{session('errorMessageNull')}}</div>
        @endif

        @if(session("errorMessageNotNull"))
        <div class="alert alert-danger">{{session('errorMessageNotNull')}}</div>

        @endif

        <div class="row mb-2">

        <div class="col-md-12">
            <label for="inputState" class="form-label">ประเภทของหมวดหมู่</label>
            <select id="coure_id" name="coure_id" class="form-select" style="width: 70rem;" required>
            <option  value="" disabled selected >เลือกประเภทของ หมวดหมู่</option>
                @foreach ($coureList as $i)
                <option value= {{ $i->id }}>{{ $i->couresname }}</option>
                @endforeach
            </select>

        </div>


            <div class=" col-md-4">
                <div class="form-check form-check-inline" data-toggle="collapse" >
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" data-toggle="collapse"
                    data-toggle="collapse"
                data-target="#quizText"
                aria-expanded="false"
                aria-controls="quizText" checked >
                    <label class="form-check-label" for="flexRadioDefault1">
                      คำถาม แบบข้อความ
                    </label>
                  </div>
                  <div class="col-md-10 collapse" id="quizText">
                    <label for="text" class="form-label">ชื่อ คำถาม</label>
                    <input type="text" class="form-control" id="questionText" name="questionText">
                  </div>
                  @if(session("MessageQuizText"))
                  <div class="alert alert-danger">{{session('MessageQuizText')}}</div>

                  @endif


          </div>


          <div class=" col-md-6">
          <div class="form-check form-check-inline" data-toggle="collapse" >
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked
            aria-expanded="false" aria-controls="multiCollapseExample1"
            data-toggle="collapse"
            data-target="#quizVideo"
            aria-expanded="false"
            aria-controls="quizVideo" >
            <label class="form-check-label" for="flexRadioDefault2">
                คำถาม เป็นวิดีโอ
            </label>
          </div>
          <div class="col-md-8  collapse" id="quizVideo">
            <label for="inputCity" class="form-label">ชื่อวิดีโอ</label>
            <input type="text" class="form-control" id="nameQuizV" name="nameQuizV">
          </div>
          <div class="col-md-10 collapse" id="quizVideo" >
            <label for="username" class="form-label">เพิ่มวิดีโอ URL</label>
          <div class="input-group">

            <input type="text" class="form-control" id="questionVideo" name="questionVideo" >
        </div>

    </div>

    <br>
    </div>


    </div>
   
    <div  class="col-md-8 " data-toggle="collapse"  role="button" >
        <button type="submit" class="btn btn-primary">Submit</button>
        </div>

        </div>
      </form>

    </div>
      <br>


@endsection
