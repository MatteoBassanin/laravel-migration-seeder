@extends('layouts.app')

@section('content')
    @foreach ($trains as $train)
        <div class="container d-flex">
            <div>{{ $train->company }}-</div>
            <div>{{ $train->departure_station }}-</div>
            <div>{{ $train->arrival_station }}-</div>
            <div>{{ $train->departure_time }}-</div>
            <div>{{ $train->arrival_time }}-</div>
            <div>{{ $train->train_code }}-</div>
            <div>{{ $train->wagons_number }}-</div>
            @if ($train->on_time == 1)
                in orario -
            @else
                treno cancellato -
            @endif

        </div>
    @endforeach
@endsection
