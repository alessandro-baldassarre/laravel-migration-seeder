@php
use Carbon\Carbon;
$today = Carbon::today();
@endphp


@extends('layouts.main')

@section('title', 'Train')

@section('main-content')
    <div class="container single-train">


        @php
         $departure_date =  new Carbon($train->departure_time);
         $arrival_date =  new Carbon($train->arrival_time);
        @endphp

<div class="train-card @if (!$train->in_time && !$train->deleted) delay  @endif @if ($train->deleted) deleted @endif" >

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

            <div class="date @if (!$train->in_time && !$train->deleted) delay  @endif @if ($train->deleted) deleted @endif">
                <div class="departure-date">
                    <span class="departure-date-title">departure</span>
                    <p>{{ $departure_date->hour}}:{{ $departure_date->minute}}</p>
                </div>
                <div class="arrival-date">
                    <span class="arrival-date-title">arrival</span>
                    <p>{{ $arrival_date->hour}}:{{ $arrival_date->minute}}</p>
                </div>
            </div>

            <div class="details">
                <div>

                    @if (!$train->in_time && !$train->deleted)
                        <p>* delay</p>
                    @endif

                    @if ($train->deleted)
                        <p>* deleted</p>
                    @endif

                </div>

                <a href="{{route("trains.index")}}" class="details-button">Back To Trains</a>

            </div>



        </div>
    </div>
@endsection

