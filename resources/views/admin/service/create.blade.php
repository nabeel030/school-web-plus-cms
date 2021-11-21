@extends('layouts.app')


@section('content')

<div class="card">
  <div class="card-header" id="lefttalign">
    Add New Service
    </div>
    <div class="card-body">
      <form class="form-group" action="{{Route('services.store')}}" method="post">
        {{csrf_field()}}
        <label for="title">Service Name</label>
        <input type="text" class="form-control" name="title"><br>
        <label for="description">Description</label>
        <input type="text" class="form-control" name="description"><br>
        <div class="text-center">
          <button type="submit" class="btn btn-outline-success">Save</button>
        </div>
      </form>
    </div>
</div>

@endsection
