@extends('layouts.app')


@section('content')

<div class="card">
  <div class="card-header" id="lefttalign">
    Create New Tag
    </div>
    <div class="card-body">
      <form class="form-group" action="{{Route('tag.store')}}" method="post">
        {{csrf_field()}}
        <label for="tag">Tag Name</label>
        <input type="text" class="form-control" name="tag"><br>
        <div class="text-center">
          <button type="submit" class="btn btn-outline-success">Save Tag</button>
        </div>
      </form>
    </div>
</div>

@stop
