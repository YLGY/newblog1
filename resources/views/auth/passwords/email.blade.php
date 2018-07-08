@extends('layouts.default')
@section('title', 'Reset Password')

@section('content')
<div class="form">
    <h5 class="form__heading">Reset Password</h5>

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <form action="{{ route('password.email') }}" class="form__body" method="POST">
        @csrf

        <div class="form__group{{ $errors->has('email') ? 'has-error' : '' }}">
            <label for="email">Email:</label>
            <input type="email" class="form__control" name="email" id="email" value="{{ $email or old('email') }}" required autofocus>
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>

        <button class="form__submit" type="submit">Send reset password email</button>
    </form>
</div>
@endsection