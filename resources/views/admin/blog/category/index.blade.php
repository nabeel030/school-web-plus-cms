@extends('layouts.app')


@section('content')

<div class="card">
    <div class="card-header" id="lefttalign">Categories

    <a href="{{route('category.create')}}" id="rightalign">
      <button  class="btn btn-outline-success"><i class="fa fa-plus">&nbsp;&nbsp;NEW</i></button>
    </a>
    </div>

<div class="card-body">

<table class="table table-hover table-light" id="table_background">
  <thead id="table_head">
    <tr>
      <th scope="col">Category Name</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>

    @if($categories->count()>0)
    @foreach($categories as $cat)
    <tr>
      <td>{{$cat->name}}</td>
      <td><a href="{{Route('category.edit',['id'=>$cat->id])}}" class="btn btn-success">Edit</a></td>
      <td><a href="{{Route('category.delete',['id'=>$cat->id])}}" class="btn btn-danger">X</a></td>
    </tr>
    @endforeach
    @else
    <tr>
      <th colspan="5" class="text-center">No Categories Yet</th>
    </tr>
    @endif
  </tbody>
</table>
</div>
</div>
</div>

@stop
