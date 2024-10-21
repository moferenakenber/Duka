@extends('layouts.user_type.dashboard')

@section('content')

    <div class="main--content">
        <div class="header--wrapper">
            <div class="header--title">
                <h2>Dashboard</h2>
            </div>
            <div class="user--info">
                <div class="search--box">
                    <i class='bx bx-search'></i>
                    <input type="text" placeholder="search">
                </div>
                <!--user image-->
            </div>
        </div>
        <div class="coming-soon">
            <h1>Coming Soon</h1>
            <p>Stay tuned! We're launching something amazing.</p>
            <div class="countdown">00:00:00</div>
        </div>

        <script>
            // Simple countdown timer (optional)
            function startCountdown(duration, display) {
                let timer = duration, hours, minutes, seconds;
                setInterval(function () {
                    hours = Math.floor((timer / 60 / 60) % 24);
                    minutes = Math.floor((timer / 60) % 60);
                    seconds = Math.floor(timer % 60);

                    hours = hours < 240 ? "0" + hours : hours;
                    minutes = minutes < 10 ? "0" + minutes : minutes;
                    seconds = seconds < 10 ? "0" + seconds : seconds;

                    display.textContent = hours + ":" + minutes + ":" + seconds;

                    if (--timer < 0) {
                        timer = duration;
                    }
                }, 1000);
            }

            window.onload = function () {
                let countdownTime = 60 * 60 * 24; // 24 hours countdown (you can change this)
                let display = document.querySelector('.countdown');
                startCountdown(countdownTime, display);
            };
        </script>
    </div>


@endsection
