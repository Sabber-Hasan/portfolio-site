@extends('iportfolio.layout', ['title' => 'iPortfolio'])

@section('head')
@endsection

@section('content')
    {{-- Hero sidebar section --}}
    @include('iportfolio.inc._hero')
    
    {{-- About section --}}
    @include('iportfolio.inc._about')
    
    {{-- Stats section --}}
    @include('iportfolio.inc._stats')
    
    {{-- Skills section --}}
    @include('iportfolio.inc._skill')
    
    {{-- Resume section --}}
    @include('iportfolio.inc._resume')
    
    {{-- Portfolio section --}}
    @include('iportfolio.inc._portfolio')
    
    {{-- Services section --}}
    @include('iportfolio.inc._service')
    
    {{-- Testimonials section --}}
    @include('iportfolio.inc._testimonial')
    
    {{-- Contact section --}}
    @include('iportfolio.inc._contact')
    
@endsection

@section('script')
@endsection
