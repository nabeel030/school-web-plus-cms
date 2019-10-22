@extends('layouts.app')


@section('content')

<div class="card">
    <div class="card-header" id="lefttalign">Teachers

      <a href="{{route('teacher.create')}}" id="rightalign">
        <button  class="btn btn-outline-success"><i class="fa fa-plus">&nbsp;&nbsp;NEW</i></button>
      </a>

    </div>

    <div class="card-body">
<table class="table table-hover table-light" id="table_background">
  <thead id="table_head">
    <tr>
      <th scope="col">Image</th>
      <th scope="col">Full Name</th>
      <th scope="col">Subject</th>
      <th scope="col">Qualification</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>

    @if($teachers->count()>0)
    @foreach($teachers as $teacher)
    <tr>
      <td><img src="{{$teacher->img}}" alt="Image" width="50px" height="50px"></td>
      <td>{{$teacher->name}}</td>
      <td>{{$teacher->subject}}</td>
      <td>{{$teacher->qualification}}</td>
      <td><a href="{{route('teacher.edit', ['id' => $teacher->id])}}" class="btn btn-success">Edit</a></td>
      <td><a href="{{route('teacher.delete', ['id' => $teacher->id])}}" class="btn btn-danger">X</a></td>
    </tr>
    @endforeach
    @else
    <tr>
      <th colspan="5" class="text-center">No Teachers Added</th>
    </tr>
  @endif
  </tbody>
</table>
</div>
</div>
</div>

@endsection
