@extends('layouts.app')


@section('content')

<div class="card">
  <div class="card-header" id="lefttalign">
    Edit Service
    </div>
    <div class="card-body">
      <form class="form-group" action="{{route('update.service', ['id'=>$service->id])}}" method="post">
        {{csrf_field()}}
        <label for="title">Service Name</label>
        <input type="text" class="form-control" value="{{$service->title}}" name="title"><br>
        <label for="description">Description</label>
        <input type="text" class="form-control" value="{{$service->description}}" name="description"><br>
        <div class="text-center">
          <button type="submit" class="btn btn-outline-success">Save</button>
        </div>
      </form>
    </div>
</div>

@endsection
