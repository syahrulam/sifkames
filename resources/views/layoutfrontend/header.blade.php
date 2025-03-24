<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
        <a href="{{ url('/') }}" class="logo d-flex align-items-center me-auto">
            <h1 class="sitename">FKAM BREBES</h1>
        </a>
        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="{{ url('/') }}" class="active">Beranda</a></li>
                <li class="dropdown">
                    <a href="{{ url('/about') }}"><span>Tentang</span></a>
                    <ul>
                        <li><a href="{{ url('/team') }}">Kepengurusan</a></li>
                        <li><a href="{{ url('/sejarah') }}">Sejarah</a></li>
                    </ul>
                </li>
                <li><a href="{{ url('/contact') }}">Contact</a></li>
                @auth
                    @if(auth()->user()->role == 'donatur')
                        <li><a href="{{ url('/donasi') }}">Donasi</a></li>
                    @endif
                @else
                    <li><a href="{{ route('login') }}">Donasi</a></li>
                @endauth
            </ul>
        </nav>
        <div class="auth-buttons">
            <div class="dropdown">
                <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-person"></i>
                </button>
                <ul class="dropdown-menu">
                    @guest
                        <li><a class="dropdown-item" href="{{ route('register') }}">Register</a></li>
                        <li><a class="dropdown-item" href="{{ route('login') }}">Login</a></li>
                    @else
                        <li>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="dropdown-item btn btn-danger">Logout</button>
                            </form>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </div>
</header>

<style>
    /* Custom Styling for Header */
    #header .container-fluid {
        display: flex;
        justify-content: space-between; /* Ensure proper space between elements */
        align-items: center;
    }

    #navmenu ul {
        display: flex;
        gap: 20px; /* Adds space between the navigation items */
    }

    #navmenu ul li a {
        font-weight: bold;
    }

    .auth-buttons .dropdown {
        margin-left: 20px; /* Adds space to the left of the user icon */
    }

    .auth-buttons .dropdown-menu {
        min-width: 200px; /* Prevents dropdown from being too narrow */
    }
</style>
