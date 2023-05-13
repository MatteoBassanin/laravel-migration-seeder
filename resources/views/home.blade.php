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
            @if ($train->on_time == 1)
                in orario -
            @else
                treno cancellato -
            @endif
            <div>{{ $train->train_date }}</div>
        </div>
    @endforeach
@endsection
