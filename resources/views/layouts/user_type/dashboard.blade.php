@extends('layouts.dashboardapp')


@section('auth')


    {{--@if (\Request::is('userprofile')).  --}}
    @include('layouts.navbars.auth.sidebar')
    @yield('content')


    {{--
      @include('layouts.footers.auth.footer')
    @endif

      --}}

@endsection

