<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
        <a href="{{ url('/') }}" class="logo d-flex align-items-center me-auto">
            <h1 class="sitename">FKAM BREBES</h1>
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="{{ url('/') }}" class="active">Beranda</a></li>
                <li class="dropdown"><a href="{{ url('/about') }}"><span>Tentang</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="{{ url('/team') }}">Kepengurusan</a></li>
                        <li><a href="{{ url('/sejarah') }}">Sejarah</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="{{ url('/activities') }}"><span>Kegiatan</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="{{ url('/gebermas') }}">Gebermas</a></li>
                        <li><a href="{{ url('/muslim-medical') }}">Muslim Medical</a></li>
                        <li><a href="{{ url('/dakwah') }}">Dakwah</a></li>
                        <li><a href="{{ url('/sar-fkam') }}">SAR FKAM</a></li>
                    </ul>
                </li>
                <li><a href="{{ url('/portfolio') }}">Portfolio</a></li>
                <li><a href="{{ url('/pricing') }}">Pricing</a></li>
                <li><a href="{{ url('/blog') }}">Blog</a></li>
                <li><a href="{{ url('/contact') }}">Contact</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        <!-- Tombol Login, Register & Logout - User Icon -->
        <div class="auth-buttons">
            <div class="dropdown">
                <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-person"></i> <!-- User Icon -->
                </button>
                <ul class="dropdown-menu" aria-labelledby="userDropdown">
                    @guest
                        <li><a class="dropdown-item" href="{{ route('register') }}">Register</a></li>
                        <li><a class="dropdown-item" href="{{ route('login') }}">Login</a></li>
                    @else
                        <li>
                            <form action="{{ route('logout') }}" method="POST" style="display:inline;">
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
