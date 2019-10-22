@extends('layouts.app')

@section('content')

@include('includes.validate')

<div class="card">
  <div class="card-header" id="lefttalign">
    New Review
    </div>
    <div class="card-body">
      <form class="form-group" action="{{route('parent.store')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <label for="name">Full Name</label>
        <input type="text" class="form-control" name="name"><br>
        <input type="file" name="img"><br><br>
        <label for="relation">Relation</label>
        <input type="text" class="form-control" name="relation"><br>
        <label for="review">Review</label>
        <input type="text" class="form-control" name="review"><br>
        <div class="text-center">
          <button type="submit" class="btn btn-outline-success">Save</button>
        </div>
      </form>
    </div>
</div>

@endsection
