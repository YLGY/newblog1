@extends('layouts.default')
@section('title', 'Register')

@section('content')
    <div class="form">
        <h5 class="form__heading">Register</h5>

        @include('shared._errors')

        <form action="{{ route('users.store') }}" class="form__body" method="POST">
            @csrf

            <div class="form__group">
                <label for="name">Name:</label>
                <input type="text" class="form__control" name="name" id="name" value="{{ old('name') }}">
            </div>

            <div class="form__group">
                <label for="email">Email:</label>
                <input type="email" class="form__control" name="email" id="email" value="{{ old('email') }}">
            </div>

            <div class="form__group">
                <label for="password">Password:</label>
                <input type="password" class="form__control" name="password" id="password">
            </div>

            <div class="form__group">
                <label for="password_confirmation">Confirm Password</label>
                <input type="password" class="form__control" name="password_confirmation" id="password_confirmation">
            </div>

            <button class="form__submit" type="submit">Register</button>
        </form>
    </div>
@endsection