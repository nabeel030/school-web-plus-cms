@extends('layouts.app')


@section('content')

<div class="card">
    <div class="card-header" id="lefttalign">Services

      <a href="{{route('services.create')}}" id="rightalign">
        <button  class="btn btn-outline-success"><i class="fa fa-plus">&nbsp;&nbsp;NEW</i></button>
      </a>

    </div>

    <div class="card-body">
<table class="table table-hover table-light" id="table_background">
  <thead id="table_head">
    <tr>
      <th scope="col">Service Title</th>
      <th scope="col">Description</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>

    @if($services->count()>0)
    @foreach($services as $service)
    <tr>
      <td>{{$service->title}}</td>
      <td>{{$service->description}}</td>
      <td><a href="{{route('edit.service',['id'=>$service->id])}}" class="btn btn-success">Edit</a></td>
      <td><a href="{{route('services.delete',['id'=>$service->id])}}" class="btn btn-danger">X</a></td>
    </tr>
    @endforeach
    @else
    <tr>
      <th colspan="5" class="text-center">No Services Added Yet</th>
    </tr>
  @endif
  </tbody>
</table>
</div>
</div>
</div>

@stop
