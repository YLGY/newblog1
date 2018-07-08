@extends('layouts.default')
@section('title', 'Update Password')

@section('content')
<div class="form">
    <h5 class="form__heading">Update Password</h5>

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <form action="{{ route('password.update') }}" class="form__body" method="POST">
        @csrf

        <input type="hidden" name="token" value="{{ $token }}">

        <div class="form__group{{ $errors->has('email') ? 'has-error' : '' }}">
            <label for="email">Email:</label>
            <input type="email" class="form__control" name="email" id="email" value="{{ $email or old('email') }}" required autofocus>
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>

        <div class="form__group{{ $errors->has('password') ? 'has-error' : '' }}">
            <label for="password">Password:</label>
            <input type="text" class="form__control" name="password" id="password">
            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>

        <div class="form__group{{ $errors->has('password_confirmation') ? 'has-error' : '' }}">
            <label for="password_confirmation">Confirm Password:</label>
            <input type="text" class="form__control" name="password_confirmation" id="password_confirmation">
            @if ($errors->has('password_confirmation'))
                <span class="help-block">
                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                </span>
            @endif
        </div>

        <button class="form__submit" type="submit">Update Password</button>
    </form>
</div>
@endsection