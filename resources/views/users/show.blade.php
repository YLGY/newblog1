@extends('layouts.default')
@section('title', $user->name)

@section('content')
    <user-component name="{{ $user->name }}"
                    avatar="{{ $user->gravatar('140') }}"
                    route="{{ route('users.show', $user->id) }}"></user-component>
@endsection