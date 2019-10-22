@extends('layouts.app')

@section('content')

@include('includes.validate')

<div class="card">
  <div class="card-header" id="lefttalign">
    New Images
    </div>
    <div class="card-body" style="opacity: 0.8">
      <form class="form-group" action="{{route('gallery.store')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <label>Upload Images</label><br>
        <input type="file" name="img[]" multiple="true"><br><br>
        <div class="text-left">
          <button type="submit" class="btn btn-outline-success">Save</button>
        </div>
      </form>
    </div>
</div>

@endsection
