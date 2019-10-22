@extends('layouts.app')


@section('content')

<div class="card">
    <div class="card-header" id="lefttalign">Gallery

      <a href="{{route('gallery.create')}}" id="rightalign">
        <button  class="btn btn-outline-success"><i class="fa fa-plus">&nbsp;&nbsp;NEW</i></button>
      </a>

    </div>

    <div class="card-body">
<table class="table table-hover table-light" id="table_background">
  <thead id="table_head">
    <tr>
      <th scope="col">Image</th>
      <th scope="col" class="text-right">Delete</th>
    </tr>
  </thead>
  <tbody>

    @if($images->count()>0)
    @foreach($images as $image)
    <tr>
      <td><img src="{{$image->img}}" alt="Image" width="50px" height="50px"></td>
      <td class="text-right"><a href="{{route('gallery.delete',['id'=>$image->id])}}" class="btn btn-danger">X</a></td>
    </tr>
    @endforeach
    @else
    <tr>
      <th colspan="5" class="text-center">Gallery is Empty!</th>
    </tr>
  @endif
  </tbody>
</table>
</div>
</div>
</div>

@stop
