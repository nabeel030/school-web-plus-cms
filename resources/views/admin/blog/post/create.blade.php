@extends('layouts.app')


@section('content')

<div class="card">
  <div class="card-header" id="lefttalign">
    Create New Post
    </div>
    <div class="card-body">
      <form class="form-group" action="{{Route('post.store')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <label for="title">Title</label>
        <input type="text" class="form-control" name="title" value="{{old('title')}}"><br>
        <label for="img">Upload Image</label>
        <input type="file" class="form-control" name="image" value="{{old('img')}}"><br>
        <label for="category_id">Select Category</label>
        <select class="form-control" name="category_id">
          @foreach($category as $cat)
              <option value="{{$cat->id}}" >{{$cat->name}}</option>
          @endforeach
        </select><br>
        <label>Select Tags</label>
        @foreach($tags as $tag)
          <div class="checkbox">
            <label for="tags">
              <input type="checkbox" name="tags[]" value="{{$tag->id}}">
                {{$tag->tag}}
            </label>
          </div>
        @endforeach
        <br>
        <label for="content">Content</label><br>
        <textarea name="content" id="content" rows="6" cols="100" value="{{old('content')}}"></textarea>
        <div class="text-center">
          <button type="submit" class="btn btn-outline-success">Store Post</button>
        </div>
      </form>
    </div>
</div>

@stop

@section('styles')
  <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.css" rel="stylesheet">
@stop

@section('scripts')
  <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.js"></script>

  <script>

    $(document).ready(function()
    {
      $('#content').summernote();
    });

  </script>

@stop
