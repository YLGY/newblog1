<div class="user">
    <a href="{{ route('users.show', Auth::user()) }}" class="user__link">
        <img src="{{ Auth::user()->gravatar() }}" alt="{{ Auth::user()->name }}" class="user__img">
        <p class="user__name">
            {{ Auth::user()->name }}
        </p>
    </a>
</div>