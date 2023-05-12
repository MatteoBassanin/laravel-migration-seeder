@extends('layouts.app')

@section('content')
    @foreach ($trains as $train)
        <div>
            {{ $train }}
        </div>
    @endforeach
@endsection
