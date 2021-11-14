@extends('layouts.app')


@section('content')

<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Brochures
      <a href="{{route('brochure.create')}}" id="rightalign">
        <button  class="btn btn-outline-success"><i class="fas fa-plus"></i>&nbsp;&nbsp;NEW</i></button>
      </a>
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
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
@endsection
