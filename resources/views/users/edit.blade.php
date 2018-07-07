@extends('layouts.default')
@section('title', 'Edit personal info')

@section('content')
    <div class="form">
        <h5 class="form__heading">Edit personal info</h5>

        @include('shared._errors')

        <div class="gravatar">
            <a href="http://gravatar.com/emails" target="_black">
                <img src="{{ $user->gravatar('200') }}" alt="{{ $user->name }}" class="gravatar__img">
            </a>
        </div>

        <form action="{{ route('users.update', $user->id) }}" class="form__body" method="POST">
            @csrf
            @method('PATCH')

            <div class="form__group">
                <label for="name">Name:</label>
                <input type="text" class="form__control" name="name" id="name" value="{{ $user->name }}">
            </div>

            <div class="form__group">
                <label for="email">Email:</label>
                <input type="email" class="form__control" name="email" id="email" value="{{ $user->email }}" disabled>
            </div>

            <div class="form__group">
                <label for="password">Password:</label>
                <input type="password" class="form__control" name="password" id="password">
            </div>

            <div class="form__group">
                <label for="password_confirmation">Confirm Password</label>
                <input type="password" class="form__control" name="password_confirmation" id="password_confirmation">
            </div>

            <button class="form__submit" type="submit">Update</button>
        </form>
    </div>
@endsection