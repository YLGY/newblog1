<li class="users__item">
    <img src="{{ $user->gravatar() }}" alt="{{ $user->name }}" class="users__img">
    <a href="{{ route('users.show', $user->id) }}" class="users__name">{{ $user->name }}</a>

    @can('destroy', $user)
        <form action="{{ route('users.destroy', $user->id) }}" method="POST">
            @csrf
            @method('DELETE')

            <button class="btn btn-danger delete-btn" type="submit">Delete</button>
        </form>
    @endcan
</li>