<li class="status" id="status-{{ $status->id }}">
    <a href="{{ route('users.show', $user->id) }}" class="status__img-container">
        <img src="{{ $user->gravatar() }}" alt="{{ $user->name }}" class="status__img">
    </a>
    <div class="status__text-container">
        <span class="status__user">
            <a href="{{ route('users.show', $user->id) }}">{{ $user->name }}</a>
        </span>
        <span class="status__time">
            {{ $status->created_at->diffForHumans() }}
        </span>
        <span class="status__content">
            {{ $status->content }}
        </span>
        @can('destroy', $status)
            <form action="{{ route('statuses.destroy', $status->id) }}" method="POST">
                @csrf
                @method('DELETE')

                <button class="btn btn-sm btn-danger status__delete float-right">Delete</button>
            </form>
        @endcan
    </div>
</li>