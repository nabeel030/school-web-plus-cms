@extends('layouts.app')


@section('content')

<div class="card">
    <div class="card-header" id="lefttalign">Published Posts


      <a href="{{route('post.create')}}" id="rightalign">
        <button  class="btn btn-outline-success"><i class="fa fa-plus">&nbsp;&nbsp;NEW</i></button>
      </a></div>

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

    @if($posts->count()>0)
    @foreach($posts as $post)
    <tr>
      <td><img src="{{$post->image}}" alt="Image" width="50px" height="50px"></td>
      <td>{{$post->title}}</td>
      <td><a href="{{Route('post.edit',['id'=>$post->id])}}" class="btn btn-success">Edit</a></td>
      <td><a href="{{Route('post.delete',['id'=>$post->id])}}" class="btn btn-danger">X</a></td>
    </tr>
    @endforeach
    @else
    <tr>
      <th colspan="5" class="text-center">No Posts Yet</th>
    </tr>
  @endif
  </tbody>
</table>
</div>
</div>
</div>

@stop
