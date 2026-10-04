<nav class="navbar navbar-expand-lg navbar-lumen sticky-top">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center gap-2 fw-semibold" href="{{ route('homepage') }}">
            <svg class="brand-mark" viewBox="0 0 32 32" aria-hidden="true">
                <rect x="4" y="6" width="8" height="20" rx="1" fill="#b8894a" />
                <rect x="13" y="4" width="8" height="22" rx="1" fill="#f4efe6" />
                <rect x="22" y="8" width="6" height="18" rx="1" fill="#d4b483" />
            </svg>
            Biblioteca Lumen
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarLumen"
            aria-controls="navbarLumen" aria-expanded="false" aria-label="Apri il menu">
            <span class="navbar-toggler-icon"></span>
        </button>

        {{-- show if  logged in --}}
        @auth
            <span class="navbar-text rounded-pill p-2 btn-lumen">
                <i class="bi bi-person-fill"></i> <a
                    class="link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover "
                    href="{{ route('user.index') }}">Benvenuto {{ Auth::user()->name }}</a>
                {{-- navbar-lumen  --}}
                {{-- 
                link offset-*-hover ->, distanza tra sottolineatura e testo quando ci passi sopra
                link-underline link-underline-opacity-0 -> sottolineatura a 0 di base
                link-underline-opacity-*-hover-> sottolineatura quando ci passi sopra
                 --}}

            </span>
            <form action="/logout" method="POST">
                @csrf
                <button type="submit" class="ms-2 p-2 nav-link">Esci dall'account</button>
            </form>
        @endauth
        {{-- END show if  logged in --}}


        <div class="collapse navbar-collapse" id="navbarLumen">

            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('homepage') ? 'active' : '' }}"
                        href="{{ route('homepage') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('index') ? 'active' : '' }}"
                        href="{{ route('index') }}">Catalogo</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('authors.index') ? 'active' : '' }}"
                        href="{{ route('authors.index') }}">Autori</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('create') ? 'active' : '' }}"
                        href="{{ route('create') }}">Registra un libro</a>
                </li>

                {{-- show if not logged in --}}
                @guest

                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('register') ? 'active' : '' }}"
                            href="{{ route('register') }}">Registrati</a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('login') ? 'active' : '' }}" href="/login">Accedi</a>
                    </li>
                @endguest
                {{-- show if not logged in --}}

            </ul>

        </div>

        {{--         <span class="navbar-text text-white">
            Benvenuto __nome utente dinamico__
        </span> --}}

    </div>
</nav>
