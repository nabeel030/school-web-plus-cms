@extends('layouts.app')


@section('content')

<div class="card">
  <div class="card-header" id="lefttalign">
    Edit Category
    </div>
    <div class="card-body">
      <form class="form-group" action="{{Route('category.update',['id'=>$cat->id])}}" method="post">
        {{csrf_field()}}
        <label for="name">Category Name</label>
        <input type="text" class="form-control" name="name" value="{{$cat->name}}"><br>
        <div class="text-center">
          <button type="submit" class="btn btn-outline-success">Update Category</button>
        </div>
      </form>
    </div>
</div>

@stop
