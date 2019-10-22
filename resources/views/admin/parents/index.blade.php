@extends('layouts.app')


@section('content')

<div class="card">
    <div class="card-header" id="lefttalign">Parents' Reviews

      <a href="{{route('parent.create')}}" id="rightalign">
        <button  class="btn btn-outline-success"><i class="fa fa-plus">&nbsp;&nbsp;NEW</i></button>
      </a>

    </div>

    <div class="card-body">
<table class="table table-hover table-light" id="table_background">
  <thead id="table_head">
    <tr>
      <th scope="col">Image</th>
      <th scope="col">Full Name</th>
      <th scope="col">Relation</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>

    @if($parents->count()>0)
    @foreach($parents as $parent)
    <tr>
      <td><img src="{{$parent->img}}" alt="Image" width="50px" height="50px"></td>
      <td>{{$parent->name}}</td>
      <td>{{$parent->relation}}</td>
      <td><a href="{{route('parent.edit',['id'=>$parent->id])}}" class="btn btn-success">Edit</a></td>
      <td><a href="{{route('parent.delete',['id'=>$parent->id])}}" class="btn btn-danger">X</a></td>
    </tr>
    @endforeach
    @else
    <tr>
      <th colspan="5" class="text-center">No Reviews Added</th>
    </tr>
  @endif
  </tbody>
</table>
</div>
</div>
</div>

@endsection
