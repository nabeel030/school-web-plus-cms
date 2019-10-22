@extends('layouts.app')


@section('content')

<div class="card">
    <div class="card-header" id="lefttalign">Brochures

      <a href="{{route('brochure.create')}}" id="rightalign">
        <button  class="btn btn-outline-success"><i class="fa fa-plus">&nbsp;&nbsp;NEW</i></button>
      </a>

    </div>

    <div class="card-body">
<table class="table table-hover table-light" id="table_background">
  <thead id="table_head">
    <tr>
      <th scope="col">Image</th>
      <th scope="col">Title</th>
      <th scope="col">Activate</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>

    @if($brochures->count()>0)
    @foreach($brochures as $brochure)
    <tr>
      <td><img src="{{$brochure->image}}" alt="Image" width="50px" height="50px"></td>
      <td>{{$brochure->title}}</td>
      <td>
      @if($brochure->active)
      <a href="{{route('brochure.disable',['id'=>$brochure->id])}}" class="btn btn-danger">Disable</a></td>
      @else
      <a href="{{route('brochure.enable',['id'=>$brochure->id])}}" class="btn btn-success">Enable</a></td>
      @endif
      <td><a href="{{route('brochure.delete',['id'=>$brochure->id])}}" class="btn btn-danger">X</a></td>
    </tr>
    @endforeach
    @else
    <tr>
      <th colspan="5" class="text-center">No Reviews Added</th>
    </tr>
  @endif
  </tbody>
</table>
</div>
</div>
</div>

@endsection
