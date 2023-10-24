@extends('layouts.base')

@section('title', 'Countdown Timer')

@section('content')
    <div class="countdown-container">
        <h2>Event Starts In:</h2>
        <div id="countdown">
            <span id="days">00</span> days
            <span id="hours">00</span> hours
            <span id="minutes">00</span> minutes
            <span id="seconds">00</span> seconds
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const eventDate = new Date("2023-12-07").getTime();

            const interval = setInterval(function() {
                const currentDate = new Date().getTime();

                let timeDiff = eventDate - currentDate;

                if (timeDiff < 0) {
                    clearInterval(interval);
                    document.getElementById('countdown').innerHTML = "Event has started!";
                    return;
                }
                let days = Math.floor(timeDiff / (1000 * 60 * 60 * 24));
                let hours = Math.floor((timeDiff % (1000 * 60 * 60 *
                    24)) / (1000 * 60 * 60));
                let minutes = Math.floor((timeDiff % (1000 * 60 * 60)) / (1000 * 60));
                let
                    seconds = Math.floor((timeDiff % (1000 * 60)) / 1000);
                document.getElementById('days').textContent = days.toString().padStart(2, '0');
                document.getElementById('hours').textContent = hours.toString().padStart(2, '0');
                document.getElementById('minutes').textContent = minutes.toString().padStart(2, '0');
                document.getElementById('seconds').textContent = seconds.toString().padStart(2, '0');
            }, 1000);
        });
    </script>
@endpush
