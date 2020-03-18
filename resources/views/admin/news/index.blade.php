@extends('layouts.app')


@section('content')

<div class="card">
    <div class="card-header" id="lefttalign">News & Updates test

      <a href="{{route('news.create')}}" id="rightalign">
        <button  class="btn btn-outline-success"><i class="fa fa-plus">&nbsp;&nbsp;NEW</i></button>
      </a></div>

    <div class="card-body">
<table class="table table-hover table-light" id="table_background">
  <thead id="table_head">
    <tr>
      <th scope="col">News</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>

    @if($news->count()>0)
    @foreach($news as $news)
    <tr>
      <td>{{$news->news}}</td>
      <td><a href="{{route('news.edit', ['id' => $news->id])}}" class="btn btn-success">Edit</a></td>
      <td><a href="{{route('news.delete', ['id' => $news->id])}}" class="btn btn-danger">X</a></td>
    </tr>
    @endforeach
    @else
    <tr>
      <th colspan="5" class="text-center">No News Yet</th>
    </tr>
  @endif
  </tbody>
</table>
</div>
</div>
</div>

@endsection
