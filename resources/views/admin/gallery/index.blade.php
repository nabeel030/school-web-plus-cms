@extends('layouts.app')


@section('content')

<div class="card">
    <div class="card-header" id="lefttalign">Gallery

      <a href="{{route('gallery.create')}}" class="float-end">
          <button  class="btn btn-sm btn-success"><i class="fas fa-plus"></i>&nbsp;Add</button>
      </a>

    </div>

    <div class="card-body">
        <div class="row">
        @forelse($images as $image)
            <div class="col-md-4 mb-3">
               <div class="card">
                   <div class="card-header">
                       Posted {{$image->created_at->diffForHumans()}}
                       <a href="{{route('gallery.delete',['id'=>$image->id])}}" class="btn btn-sm btn-danger float-end">
                           <i class="fa fa-trash"></i>
                       </a>
                   </div>
                   <div class="card-body">
                       <img class="card-img-top" src="{{$image->img}}" alt="img" height="170">
                   </div>
               </div>
            </div>
        @empty
            <h3>No data</h3>
        @endforelse
        </div>
        <div class="float-end">
            {{$images->links("pagination::bootstrap-4")}}
        </div>

    </div>
</div>
@stop
