@extends('layouts.app')


@section('content')

<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Brochures
      <a href="{{route('brochure.create')}}" class="float-end">
        <button  class="btn btn-sm btn-success"><i class="fas fa-plus"></i>&nbsp;Add</button>
      </a>
    </div>
    <div class="card-body">
        {!! $dataTable->table() !!}
    </div>
</div>
{!! $dataTable->scripts() !!}

@endsection
