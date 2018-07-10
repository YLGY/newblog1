@extends('layouts.default')
@section('title', $user->name)

@section('content')
    <user-component name="{{ $user->name }}"
                    avatar="{{ $user->gravatar('140') }}"
                    route="{{ route('users.show', $user->id) }}"></user-component>

    <div class="statuses-container">
        @if (count($statuses) > 0)
            <ol class="statuses">
                @foreach ($statuses as $status)
                    @include('statuses._status')
                @endforeach
            </ol>
            {!! $statuses->render() !!}
        @endif
    </div>
@endsection