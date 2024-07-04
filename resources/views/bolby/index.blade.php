@extends('bolby.layout', ['title' => 'Job Entry', 'name' => 'dashboard'])

@section('content')

    <!-- section home -->
    @include('bolby.inc._home')

    <!-- section about -->
    @include('bolby.inc._about')

    <!-- section services -->
    @include('bolby.inc._services')

    <!-- section experience -->
    @include('bolby.inc._experience')

    <!-- section works -->
    @include('bolby.inc._works')

    <!-- section prices -->
    @include('bolby.inc._prices')

    <!-- section testimonials -->
    @include('bolby.inc._testimonials')

    <!-- section blog -->
    @include('bolby.inc._blog')

    <!-- section contact -->
    @include('bolby.inc._contact')

@endsection