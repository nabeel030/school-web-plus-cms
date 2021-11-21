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
        {!! $dataTable->table() !!}
    </div>
</div>
{!! $dataTable->scripts() !!}

@endsection
