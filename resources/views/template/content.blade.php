@extends('template.layout')


@section('content')



  <form method="post" action="{{ route('createcontent') }}" enctype="multipart/form-data">
    @csrf
    <h3>สร้างเนื้อหาบทเรียน</h3>
    @if(session("success"))
    <div class="alert alert-success">{{session('success')}}</div>
    @endif

    <div class="row g-3">


    <div class="col-12">
        <label for="coure_id" class="form-label">ประเภทของหมวดหมู่</label>

        <div class="input-group has-validation">

    <select class="form-select" id="coure_id" name="coure_id" aria-label="Default select example" required>

      <option value="" disabled selected >เลือก ประเภทของ หมวดหมู่</option>
      @foreach ($coureList as $i)
      <option value= {{ $i->id }} >{{ $i->couresname }}</option>

      @endforeach
      @error('coure_id')
      <div class="my-2">
          <span class="text-danger">{{$message}}</span>
      </div>
  @enderror
    </select>




        </div>

        <br>
        <div class="col-12">
            <label for="username" class="form-label">ชื่อ วิดีโอ</label>
            <div class="input-group has-validation">

              <input type="text" class="form-control" id="contentname" name="contentname" placeholder="videoname" required>

            </div>
          </div>
          @error('contentname')
          <div class="my-2">
              <span class="text-danger">{{$message}}</span>
          </div>
      @enderror
          <br>
      <div class="col-12">
        <label for="username" class="form-label">เพิ่มวิดีโอ(URL)</label>
      <div class="input-group">

        <input type="text" class="form-control" id="video" name="video" required>
    </div>
      </div>
      <br>

      <div class="col-12">
        <label for="username" class="form-label">ความหมายของ วิดีโอ</label>
        <div class="input-group has-validation">

          <input type="text" class="form-control" id="content_text" name="content_text" placeholder="description" required>

        </div>
      </div>
      <br>

  <div class="input-group">
  <button type="submit" class="btn btn-primary mb-3">Add</button>
</div>
</form>
  @endsection
