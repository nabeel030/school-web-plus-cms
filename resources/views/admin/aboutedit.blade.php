@extends('layouts.app')


@section('content')

<div class="card">
  <div class="card-header" id="lefttalign">
    Edit About
    </div>
    <div class="card-body">
      <form class="form-group" action="{{route('about.update', ['id'=>$about->id])}}" method="post">
        {{csrf_field()}}
        <label for="title">About Title</label>
        <input type="text" class="form-control" value="{{$about->title}}" name="title"><br>
        <label for="description">Description</label>
        <input type="text" class="form-control" value="{{$about->description}}" name="description"><br>
        <label for="experience">Experience</label>
        <input type="text" class="form-control" value="{{$about->experience}}" name="experience"><br>
        <label for="stdcount">Students' Strength</label>
        <input type="text" class="form-control" value="{{$about->stdcount}}" name="stdcount"><br>
        <label for="success">Students' Success Ratio</label>
        <input type="text" class="form-control" value="{{$about->success}}" name="success"><br>
        <div class="text-center">
          <button type="submit" class="btn btn-outline-success">Update</button>
        </div>
      </form>
    </div>
</div>

@endsection
