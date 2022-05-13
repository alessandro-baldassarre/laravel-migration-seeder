@php
use Carbon\Carbon;
$today = Carbon::today();
@endphp


@extends('layouts.main')

@section('title', 'Trains')

@section('main-content')
    <div class="container">

        @foreach ($trains as $train)

        @php
         $departure_date =  new Carbon($train->departure_time);
         $arrival_date =  new Carbon($train->arrival_time);
        @endphp

        <div class="train-card">

            <div class="train-company">
                <span class="train-company-title">{{ $train->train_company }}</span>
            </div>

            <div class="departure-station">
                <span class="departure-station-title">From</span>
                <span class="departure-station-description">{{ $train->departure_station }}</span>
            </div>

            <div class="arrival-station">
                <span class="arrival-station-title">To</span>
                <span class="arrival-station-description">{{ $train->arrival_station }}</span>
            </div>

            <div class="date">
                <div class="departure-date">{{ $departure_date->hour}}:{{ $departure_date->minute}} </div>
                <div class="arrival-date">{{ $arrival_date->hour}}:{{ $arrival_date->minute}} </div>
            </div>

            <div class="details">
                <div class="in-time">{{ $train->in_time }}</div>
                <div class="deleted">{{ $train->deleted }}</div>
            </div>

            <button>Go To Train</button>
        </div>

        @endforeach
    </div>
@endsection

