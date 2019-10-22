@extends('layouts.app')

@section('content')

@include('includes.validate')

<div class="card">
  <div class="card-header" id="lefttalign">
    Add New Class
    </div>
    <div class="card-body">
      <form class="form-group" action="{{route('course.store')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <label for="title">Class</label>
        <input type="text" class="form-control" name="title"><br>
        <label for="description">Description</label>
        <input type="text" class="form-control" name="description"><br>
        <input type="file" name="img">
        <div class="text-center">
          <button type="submit" class="btn btn-outline-success">Save</button>
        </div>
      </form>
    </div>
</div>

@endsection
