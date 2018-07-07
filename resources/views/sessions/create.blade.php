@extends('layouts.default')
@section('title', 'Login')

@section('content')
    <div class="form">
        <h5 class="form__heading">Login</h5>

        @include('shared._errors')

        <form action="{{ route('login') }}" class="form__body" method="POST">
            @csrf

            <div class="form__group">
                <label for="email">Email:</label>
                <input type="email" class="form__control" name="email" id="email" value="{{ old('email') }}">
            </div>

            <div class="form__group">
                <label for="password">Password:</label>
                <input type="text" class="form__control" name="password" id="password" value="{{ old('email') }}">
            </div>

            <div class="form__group">
                <label><input type="checkbox" name="remember">Remember Me</label>
            </div>

            <button class="form__submit" type="submit">Login</button>

            <p>No account yet? <a href="{{ route('signup') }}">Register Now</a></p>
        </form>
    </div>
@endsection