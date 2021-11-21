@extends('layouts.app')

@section('content')

<div class="card">
  <div class="card-header" id="lefttalign">
    Edit Review
    </div>
    <div class="card-body">
      <form class="form-group" action="{{route('parent.update', ['id' => $parent->id])}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <label for="name">Full Name</label>
        <input type="text" class="form-control" name="name" value="{{$parent->name}}"><br>
        <input type="file" name="img"><br><br>
        <label for="relation">Relation</label>
        <input type="text" class="form-control" name="relation" value="{{$parent->relation}}"><br>
        <label for="review">Review</label>
        <input type="text" class="form-control" name="review" value="{{$parent->review}}"><br>
        <div class="text-center">
          <button type="submit" class="btn btn-outline-success">Update</button>
        </div>
      </form>
    </div>
</div>

@endsection
