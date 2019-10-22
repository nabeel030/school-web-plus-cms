@extends('layouts.app')

@section('content')

<div class="card">
  <div class="card-header" id="lefttalign">Dashboard</div>
  <div class="card-body">
    <div class="row">

      <div class="col-lg-4">
        <div class="card" style="border: 2px solid powderblue">
          <div class="card-header text-center" style="background: #1C2833">
            <a href="{{route('post.index')}}">
              <button type="button" class="btn btn-outline-success" name="button" style="width: 100%; color: #F0F3F4">Posts</button>
            </a>
          </div>
          <div class="card-body">
            @if (session('status'))
            <div class="alert alert-success" role="alert">
              {{ session('status') }}
            </div>
            @endif
            <h2 class="text-center" style="color: powderblue">{{$pcount}}</h2>
          </div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="card" style="border: 2px solid red">
          <div class="card-header text-center" style="background: #1C2833">
            <a href="{{route('category.index')}}">
              <button type="button" class="btn btn-outline-success" name="button" style="width: 100%; color: #F0F3F4">Categories</button>
            </a>
          </div>

          <div class="card-body">
            <h2 class="text-center" style="color: red">{{$ccount}}</h2>
          </div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="card" style="border: 2px solid green">
          <div class="card-header text-center" style="background: #1C2833">
            <a href="{{route('tag.index')}}">
              <button type="button" class="btn btn-outline-success" name="button" style="width: 100%; color: #F0F3F4">Tags</button>
            </a>
          </div>
          <div class="card-body">
            <h2 class="text-center" style="color: green">{{$tcount}}</h2>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
@endsection
