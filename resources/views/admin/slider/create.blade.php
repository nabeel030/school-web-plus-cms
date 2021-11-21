@extends('layouts.app')

@section('content')

<div class="card">
  <div class="card-header" id="lefttalign">
    Slider Images
    </div>
    <div class="card-body">
      <form class="form-group" action="{{route('slider.store')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <label for="title">Caption</label>
        <input type="text" class="form-control" name="title"><br>
        <input type="file" name="img">
        <div class="text-center">
          <button type="submit" class="btn btn-outline-success">Save</button>
        </div>
      </form>
    </div>
</div>

@endsection
