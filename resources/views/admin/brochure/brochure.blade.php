@extends('layouts.app')

@section('content')

@include('includes.validate')

<div class="card">
  <div class="card-header" id="lefttalign">
    New Brochure
    </div>
    <div class="card-body">
      <form class="form-group" action="{{route('brochure.store')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <label for="title">Title</label>
        <input type="text" class="form-control" name="title"><br>
        <input type="file" name="image"><br><br>
        <div class="text-center">
          <button type="submit" class="btn btn-outline-success">Upload</button>
        </div>
      </form>
    </div>
</div>

@endsection
