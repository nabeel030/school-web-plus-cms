@extends('layouts.app')


@section('content')

<div class="card">
  <div class="card-header" id="lefttalign">
    Update Setting
    </div>
    <div class="card-body">
      <form class="form-group" action="{{route('update.setting', ['id' => $setting->id])}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <label for="setting">Site Name</label>
        <input type="text" class="form-control" name="title" value="{{$setting->title}}"><br>
        <label for="phone">Phone Number</label>
        <input type="text" class="form-control" name="phone" value="{{$setting->phone}}"><br>
        <label for="email">Email</label>
        <input type="email" class="form-control" name="email" value="{{$setting->email}}"><br>
        <label for="address">Address</label>
        <input type="text" class="form-control" name="address" value="{{$setting->address}}"><br>
        <label for="facebook">Facebook</label>
        <input type="text" class="form-control" name="facebook" value="{{$setting->facebook}}"><br>
        <label for="twitter">Twitter</label>
        <input type="text" class="form-control" name="twitter" value="{{$setting->twitter}}"><br>
        <label for="logo">Logo</label>
        <input type="file" class="form-control" name="logo"><br>
        <div class="text-center">
          <button type="submit" class="btn btn-outline-success">Update</button>
        </div>
      </form>
    </div>
</div>

@endsection
