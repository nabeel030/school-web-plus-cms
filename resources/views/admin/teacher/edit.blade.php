@extends('layouts.app')

@section('content')

<div class="card">
  <div class="card-header" id="lefttalign">
    Edit Teacher
    </div>
    <div class="card-body">
      <form class="form-group" action="{{route('teacher.update', ['id' => $teacher->id])}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <label for="name">Full Name</label>
        <input type="text" class="form-control" name="name" value="{{$teacher->name}}"><br>
        <input type="file" name="img"><br><br>
        <label for="subject">Subject</label>
        <input type="text" class="form-control" name="subject" value="{{$teacher->subject}}"><br>
        <label for="qualification">Qualification</label>
        <input type="text" class="form-control" name="qualification" value="{{$teacher->qualification}}"><br>
        <label for="review">Description</label>
        <input type="text" class="form-control" name="review" value="{{$teacher->review}}"><br>
        <div class="text-center">
          <button type="submit" class="btn btn-outline-success">Update</button>
        </div>
      </form>
    </div>
</div>

@endsection
