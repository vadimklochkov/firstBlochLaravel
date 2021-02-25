<!-- Menu -->
<section id="menu">

<!-- Actions -->
    <section>
        <ul class="actions vertical">
    @guest
            <li><h3>Login</h3></li>
            <li>
    <form method="POST" action="{{ route('login') }}">
        @csrf

                <input placeholder="Email" id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                <br>

                <input placeholder="Password" id="password" type="password" class="form-control" name="password" required autocomplete="current-password">

                <br>

                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                    <br>
                <button type="submit" class="button big fit">
                    {{ __('Login') }}
                </button>

                <!-- @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif -->
    </form>
            </li>

            <li><h3>Registration</h3></li>
            <li>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <input placeholder="Name" id="name" type="text" class="form-control " name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

        <br>
        <input placeholder="Email" id="email" type="email" class="form-control " name="email" value="{{ old('email') }}" required autocomplete="email">

        <br>
        <input placeholder="Password" id="password" type="password" class="form-control" name="password" required autocomplete="new-password">

        <br>
        <input placeholder="Confirm Password" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
        <br>

        <button type="submit" class="button big fit">
            {{ __('Register') }}
        </button>
    </form>
            </li>
        @else
        <p>{{ Auth::user()->name }}</p>
        <a href="/add">
                                        <h3>Add Post</h3>
                                    </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <h3>{{ __('Logout') }}</h3>
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
        @endguest
        </ul>
    </section>

</section>