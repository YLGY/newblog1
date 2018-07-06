@extends('layouts.default')

@section('title', 'Home')

@section('content')
    <div class="content">
        <h1 class="content__title">
            Hello Laravel
        </h1>
        <p class="content__text">
            This is the Home page {{ date('Y') }}
        </p>
        <a href="{{ route('signup') }}" class="btn btn-lg btn-success">Register</a>
    </div>
@endsection