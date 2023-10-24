@extends('layouts.base')

@section('title', 'Riz')

@section('content')
    <div class="hero-section animate__animated animate__fadeIn">
        <h1 class="animate__animated animate__bounce">Welcome!</h1>
        <p class="animate__animated animate__fadeInLeft">Click Button Below to Explore.</p>
        <a href="{{ route('countdown') }}" class="cta-button animate__animated animate__pulse animate__infinite">Click Me!</a>
    </div>

@endsection