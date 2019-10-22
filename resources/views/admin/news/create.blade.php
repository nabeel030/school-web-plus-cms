@extends('layouts.app')

@section('content')

@include('includes.validate')

<div class="card">
  <div class="card-header" id="lefttalign">
    Create News
    </div>
    <div class="card-body">
      <form class="form-group" action="{{route('news.store')}}" method="post">
        {{csrf_field()}}
        <label for="title">News</label>
        <input type="text" class="form-control" name="news"><br>
        <div class="text-center">
          <button type="submit" class="btn btn-outline-success">Save</button>
        </div>
      </form>
    </div>
</div>

@endsection
