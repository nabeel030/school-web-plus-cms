@extends('layouts.app')


@section('content')

<div class="card">
    <div class="card-header" id="lefttalign">Tags

      <a href="{{route('tag.create')}}" id="rightalign">
        <button  class="btn btn-outline-success"><i class="fa fa-plus">&nbsp;&nbsp;NEW</i></button>
      </a>
    </div>

<div class="card-body">

<table class="table table-hover table-light" id="table_background">
  <thead id="table_head">
    <tr>
      <th scope="col">Tag Name</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>

    @if($tags->count()>0)
    @foreach($tags as $tag)
    <tr>
      <td>{{$tag->tag}}</td>
      <td><a href="{{Route('tag.edit',['id'=>$tag->id])}}" class="btn btn-success">Edit</a></td>
      <td><a href="{{Route('tag.delete',['id'=>$tag->id])}}" class="btn btn-danger">X</a></td>
    </tr>
    @endforeach
    @else
    <tr>
      <th colspan="5" class="text-center">No Tags Yet</th>
    </tr>
    @endif
  </tbody>
</table>
</div>
</div>
</div>

@stop
