@extends('template.layout')

@section('coures')
<div class="container col-xl-10 col-xxl-8 px-4 py-5">
    <div class="row align-items-center g-lg-5 py-5">
      <div class="col-lg-7 text-center text-lg-start">
        <h1 class="display-4 fw-bold lh-1 mb-3"><h3>แก้ไขหมวดหมู่</h3></h1>


      </div>
      <div class="col-md-10 mx-auto col-lg-5">
<form class="p-4 p-md-5 border rounded-3 bg-light"  action="{{ url('coures/update/'.$editCoures->id) }}" method="post" >
    @csrf
    @if(session("success"))
        <div class="alert alert-success">{{session('success')}}</div>
    @endif
    <div class=" mb-3 ">

      <label for="floatingInput" class="form-label">Enter Coures Name</label>
      <input type="text" class="form-control"name="couresname" id="couresname" value="{{ $editCoures->couresname }}" >
    </div>
    @error('couresname')
        <div class="my-2">
            <span class="text-danger">{{$message}}</span>
        </div>
    @enderror
    <div class="col-auto">
      <button type="submit" class="btn btn-primary mb-3">Update</button>
    </div>

  </form>


</div>

</div>

</div>

  @endsection
