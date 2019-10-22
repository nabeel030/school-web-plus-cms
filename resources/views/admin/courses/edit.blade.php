@extends('layouts.app')

@section('content')

@include('includes.validate')

<div class="card">
  <div class="card-header" id="lefttalign">
    Edit Class
    </div>
    <div class="card-body">
      <form class="form-group" action="{{route('course.update', ['id' => $course->id])}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <label for="title">Class</label>
        <input type="text" class="form-control" name="title" value="{{$course->title}}"><br>
        <label for="description">Description</label>
        <input type="text" class="form-control" name="description" value="{{$course->description}}"><br>
        <input type="file" name="img">
        <div class="text-center">
          <button type="submit" class="btn btn-outline-success">Update</button>
        </div>
      </form>
    </div>
</div>

@endsection
