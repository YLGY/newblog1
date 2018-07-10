@extends('layouts.default')

@section('title', 'Home')

@section('content')
    @if (Auth::check())
        <div class="statuses-container">
            <div class="status-home">
                <section class="status-home__form">
                    @include('shared._status_form')
                </section>
                <section class="status-list">
                    <h3>Statuses List</h3>
                    @include('shared._feed')
                </section>
            </div>
            <aside class="side">
                <section class="user-info">
                    @include('shared._user_info', ['user' => Auth::user()])
                </section>
            </aside>
        </div>
    @else
        <div class="content">
            <h1 class="content__title">
                Hello Laravel
            </h1>
            <p class="content__text">
                This is the Home page {{ date('Y') }}
            </p>
            <a href="{{ route('signup') }}" class="btn btn-lg btn-success">Register</a>
        </div>
    @endif
@endsection