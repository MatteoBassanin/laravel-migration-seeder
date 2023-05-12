@extends('layouts.app')

@section('content')
    @foreach ($trains as $train)
        <div class="container d-flex">
            <div>{{ $train->agency }}-</div>
            <div>{{ $train->leaving_station }}-</div>
            <div>{{ $train->arrival_station }}-</div>
            <div>{{ $train->leaving_time }}-</div>
            <div>{{ $train->arrival_time }}-</div>
            <div>{{ $train->train_code }}-</div>
            <div>{{ $train->wagon_number }}-</div>
            <div>{{ $train->on_time }}-</div>
            <div>{{ $train->cancelled }}-</div>
            <div>{{ $train->train_date }}</div>
        </div>
    @endforeach
@endsection
