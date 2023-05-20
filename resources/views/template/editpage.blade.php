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

<table class="table">
    <thead>
      <tr>
        <th scope="col">ชื่อบทเรียน</th>
        <th scope="col">แก้ไข</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($contentShow as $i)
      <tr>

        <td><a href="#">{{$i ->contentsname}}</a></td>

        <td><button  type="button" class="btn btn-sm btn-outline-secondary">
            <a href="#" class="nav-link text-black">แก้ไข</a> 
          </button> 
          <button  type="button" class="btn btn-sm btn-outline-secondary">
            <a href="#" class="nav-link text-black">ลบ</a> 
          </button>
        </td>
      </tr>
      @endforeach

    </tbody>
  </table>
  @endsection
