@extends('layouts.base')

@section('title', 'Second Page')

@section('content')
    <div class="hero-section">
        <div class="h1-secondpage">Cool! This is your Laravel Second Page</div>
        <a href="{{ route('landing') }}" class="cta-button animate__animated animate__pulse animate__infinite">Back</a>
    </div>
@endsection
