<header>
        @guest
            @if (Route::has('login'))
                <ul class="butten">
                    <a href="{{ route('login') }}">{{ __('Login') }}</a>
                </ul>
            @endif

            @if (Route::has('register'))
                <ul class="butten">
                    <a href="{{ route('register') }}">{{ __('Register') }}</a>
                </ul>
            @endif
        @else
            <ul class="butten">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>
            </ul>
            <ul class="butten" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </ul>
            
        @endguest
    <div class="header-container">
        <a href="javascript:history.back()"><img class="img" src = "{{URL::asset("image/back.png")}}"></a>
        <h1>勞工生活及就業狀況調查</h1>
    </div>

</header>