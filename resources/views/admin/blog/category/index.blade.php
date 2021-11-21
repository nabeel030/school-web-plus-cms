@extends('layouts.app')


@section('content')

<div class="card">
    <div class="card-header">Categories

    <a href="{{route('category.create')}}" class="float-end">
        <button  class="btn btn-sm btn-success"><i class="fas fa-plus"></i>&nbsp;Add</button>
    </a>
    </div>

    <div class="card-body">
        {!! $dataTable->table() !!}
    </div>
</div>

{!! $dataTable->scripts() !!}

@endsection
