@php
use Carbon\Carbon;
$today = Carbon::today();
@endphp

<header>
    <nav>
        <div class="header-links">
            <a href="{{route("trains.index")}}">Home</a>
        </div>
        <div class="header-title">
            <h1>today trains in italy</h1>
            <h1>( {{$today->day}}-{{$today->month}}-{{$today->year}} )</h1>

        </div>
        <div></div>
    </nav>
</header>
