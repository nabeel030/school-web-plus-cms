@extends('layouts.app')


@section('content')

<div class="card">
    <div class="card-header" id="lefttalign">
      Classes

      <a href="{{route('course.create')}}" id="rightalign">
          <button  class="btn btn-outline-success"><i class="fa fa-plus">&nbsp;&nbsp;NEW</i></button>
      </a>
    </div>

    <div class="card-body">
<table class="table table-hover table-light" id="table_background">
  <thead id="table_head">
    <tr>
      <th scope="col">Image</th>
      <th scope="col">Title</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>

    @if($courses->count()>0)
    @foreach($courses as $course)
    <tr>
      <td><img src="{{$course->img}}" alt="Image" width="50px" height="50px"></td>
      <td>{{$course->title}}</td>
      <td><a href="{{route('course.edit', ['id' => $course->id])}}" class="btn btn-success">Edit</a></td>
      <td><a href="{{route('course.delete', ['id' => $course->id])}}" class="btn btn-danger">X</a></td>
    </tr>
    @endforeach
    @else
    <tr>
      <th colspan="5" class="text-center">No Classes Created!</th>
    </tr>
  @endif
  </tbody>
</table>
</div>
</div>
</div>

@endsection
