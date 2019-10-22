@extends('layouts.app')


@section('content')

<div class="card">
    <div class="card-header" id="lefttalign">Slider Images

      <a href="{{route('slider.create')}}" id="rightalign">
        <button  class="btn btn-outline-success"><i class="fa fa-plus">&nbsp;&nbsp;NEW</i></button>
      </a></div>

    <div class="card-body">
<table class="table table-hover table-light" id="table_background">
  <thead id="table_head">
    <tr>
      <th scope="col">Image</th>
      <th scope="col">Caption</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>

    @if($slider->count()>0)
    @foreach($slider as $slider)
    <tr>
      <td><img src="{{$slider->img}}" alt="Image" width="50px" height="50px"></td>
      <td>{{$slider->title}}</td>
      <td><a href="{{route('slider.edit', ['id' => $slider->id])}}" class="btn btn-success">Edit</a></td>
      <td><a href="{{route('slider.delete', ['id' => $slider->id])}}" class="btn btn-danger">X</a></td>
    </tr>
    @endforeach
    @else
    <tr>
      <th colspan="5" class="text-center">No Images Yet</th>
    </tr>
  @endif
  </tbody>
</table>
</div>
</div>
</div>

@endsection
