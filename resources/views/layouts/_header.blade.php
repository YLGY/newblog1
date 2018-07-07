<header class="header-container">
    <div class="header">
        <a href="{{route('home')}}" class="header__logo">Blog 1</a>
        <nav class="header__nav">
            <ul class="header__list">
                @if (Auth::check())
                    <li class="header__item">
                        <a href="#">Users List</a>
                    </li>
                    <li class="dropdown header__item">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="UserDropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </button>
                        <div class="dropdown-menu" aria-labelledby="UserDropdownMenu">
                            <a class="dropdown-item" href="{{ route('users.show', Auth::user()->id) }}">User Details</a>
                            <a class="dropdown-item" href="#">Edit</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item">
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <button class="btn btn-danger" type="submit">Logout</button>
                                </form>
                            </a>
                        </div>
                    </li>
                @else
                    <li class="header__item">
                        <a href="{{ route('help') }}">Help</a>
                    </li>
                    <li class="header__item">
                        <a href="{{ route('login') }}">Login</a>
                    </li>
                @endif
            </ul>
        </nav>
    </div>  
</header>