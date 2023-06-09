@extends('template.layout')

@section('editpage')
<!-- <table class="table">
  <thead>

    <tr>
      <th scope="col">Name</th>
      <th scope="col">UrlVideo</th>
      <th scope="col">text</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Mark</td>
      <td>Otto</td> 
      <td>@mdo</td>
    </tr>
  </tbody>
</table> -->

<div class="d-grid gap-2">
  <button class="btn btn-outline-secondary" type="button"><a href="/showeditpage" class="nav-link text-black">แก้ไขเนื้อหาบทเรียน</button>
  <button class="btn btn-outline-secondary" type="button"><a href="{{ route('editpagequestion') }}" class="nav-link text-black">แก้ไขข้อสอบ</button>
  <button class="btn btn-outline-secondary" type="button"><a href="{{ route('editanswer') }}" class="nav-link text-black">แก้ไขคำตอบ</button>
</div>
<table class="table">
    <thead>
      <tr>
        <th scope="col">ชื่อบทเรียน</th>
        <th scope="col">ลิํงวิดีโอ</th>
        <th scope="col">ข้อความ</th>
        <th scope="col">แก้ไข</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($contentShow as $i)
      <tr>

        <td><a href="#">{{$i ->contentname}}</a></td>
        <td><a href="#">{{$i ->video}}</a></td>
        <td><a href="#">{{$i ->content_text}}</a></td>

        <td><button  type="button" class="btn btn-sm btn-outline-secondary">
            <a href="#" class="nav-link text-black">แก้ไข</a> 
          </button> 
          <button  type="submit" class="btn btn-sm btn-outline-secondary">
            <a href="#" class="nav-link text-black">ลบ</a> 
          </button>
        </td>
      </tr>
      @endforeach

    </tbody>
  </table> 
  @endsection
  