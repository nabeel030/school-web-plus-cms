@extends('layouts.app')

@section('content')

@include('includes.validate')

<div class="card">
  <div class="card-header" id="lefttalign">
    New Teacher
    </div>
    <div class="card-body">
      <form class="form-group" action="{{route('teacher.store')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <label for="name">Full Name</label>
        <input type="text" class="form-control" name="name"><br>
        <label for="gender">Select Gender</label>
        <select class="form-control" name="gender">
              <option value="male" >Male</option>
              <option value="female" >Female</option>
        </select><br>
        <input type="file" name="img"><br><br>
        <label for="subject">Subject</label>
        <input type="text" class="form-control" name="subject"><br>
        <label for="qualification">Qualification</label>
        <input type="text" class="form-control" name="qualification"><br>
        <label for="review">Description</label>
        <input type="text" class="form-control" name="review"><br>
        <div class="text-center">
          <button type="submit" class="btn btn-outline-success">Save</button>
        </div>
      </form>
    </div>
</div>

@endsection
