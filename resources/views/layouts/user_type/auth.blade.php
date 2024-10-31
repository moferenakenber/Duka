@extends('layouts.app')


@section('auth')

        @include('layouts.navbars.auth.navbar')
        @include('layouts.navbars.auth.sidebar')
        @yield('content')

                                                      {{--
        @include('layouts.footers.auth.footer')
                                                     --}}

@endsection

{{--

    @if(\Request::is('signup'))
        @include('layouts.navbars.guest.sidebar')
        @yield('content')
        @include('layouts.footers.guest.footer')

    @elseif (\Request::is('signin'))
        @include('layouts.navbars.guest.nav')
        @yield('content')
        @include('layouts.footers.guest.footer')

    @else
        @if (\Request::is('userprofile'))
           @include('layouts.navbars.auth.sidebar')
           @yield('content')
           @include('layouts.footers.auth.footer')

        @elseif (\Request::is('profile'))
            @include('layouts.navbars.auth.sidebar')
            <div class="main-content position-relative bg-gray-100 max-height-vh-100 h-100">
                @include('layouts.navbars.auth.nav')
                @yield('content')
            </div>

        @elseif (\Request::is('virtual-reality'))
            @include('layouts.navbars.auth.nav')
            <div class="border-radius-xl mt-3 mx-3 position-relative" style="background-image: url('../assets/img/vr-bg.jpg') ; background-size: cover;">
                @include('layouts.navbars.auth.sidebar')
                <main class="main-content mt-1 border-radius-lg">
                    @yield('content')
                </main>
            </div>
            @include('layouts.footers.auth.footer')

        @else
            @include('layouts.navbars.auth.sidebar')
            <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg {{ (Request::is('rtl') ? 'overflow-hidden' : '') }}">
                @include('layouts.navbars.auth.sidebar')
                <div class="container-fluid py-4">
                    @yield('content')
                    @include('layouts.footers.auth.footer')
                </div>
            </main>
        @endif

       @include('components.fixed-plugin')
--}}
