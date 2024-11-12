@extends('layouts.user_type.auth')

@section('content')

    <div class="main--content">
        <div class="header--wrapper">
            <div class="header--title">
                <h2>Dashboard</h2>
            </div>
        </div>
        <div style="display: flex; justify-content: center;">
            <video width="640" height="360" controls>
                <source src="{{ asset('videos/U2-BeautifulDay.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>


    </div>

{{--    <x-countdown-timer />--}}



@endsection
