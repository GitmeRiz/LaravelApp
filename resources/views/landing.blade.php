@extends('layouts.base')

@section('title', 'LaravelApp')

@section('content')
    <div class="hero-section animate__animated animate__fadeIn">
        <h1 class="animate__animated animate__bounce">Congratulations!</h1>
        <h2 class="animate__animated animate__fadeInLeft">You have succesfully deploy your Laravel Project with Docker.</h2>
        <a href="{{ route('secondpage') }}" class="cta-button animate__animated animate__pulse animate__infinite">Click Me!</a>
    </div>

@endsection