<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
        <a href="{{ url('/') }}" class="logo d-flex align-items-center me-auto">
            <h1 class="sitename">FKAM BREBES</h1>
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="{{ url('/') }}" class="active">Beranda</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        <span>Tentang</span> <i class="bi bi-chevron-down toggle-dropdown"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ url('/team') }}">Kepengurusan</a></li>
                        <li><a class="dropdown-item" href="{{ url('/sejarah') }}">Sejarah</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        <span>Kegiatan</span> <i class="bi bi-chevron-down toggle-dropdown"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ url('/gebermas') }}">Gebermas</a></li>
                        <li><a class="dropdown-item" href="{{ url('/muslim-medical') }}">Muslim Medical</a></li>
                        <li><a class="dropdown-item" href="{{ url('/dakwah') }}">Dakwah</a></li>
                        <li><a class="dropdown-item" href="{{ url('/sar-fkam') }}">SAR FKAM</a></li>
                    </ul>
                </li>                
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        <span>Donasi</span> <i class="bi bi-chevron-down toggle-dropdown"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ url('/donasi') }}">Donasikan</a></li>
                        <li><a class="dropdown-item" href="{{ url('/saluran-donasi') }}">Saluran Donasi</a></li>
                    </ul>
                </li>
                <li><a href="{{ url('/contact') }}">Contact</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        <!-- Tombol Login, Register & Logout - User Icon -->
        <div class="auth-buttons">
            <div class="dropdown">
                <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-person"></i> <!-- User Icon -->
                    @auth
                        {{ auth()->user()->name }} <!-- Menampilkan nama pengguna yang sedang login -->
                    @endauth
                </button>
                <ul class="dropdown-menu" aria-labelledby="userDropdown">
                    @guest
                        <li><a class="dropdown-item" href="{{ route('register') }}">Register</a></li>
                        <li><a class="dropdown-item" href="{{ route('login') }}">Login</a></li>
                    @else
                        <li><span class="dropdown-item">Hello, {{ auth()->user()->name }}</span></li> <!-- Menampilkan nama pengguna -->
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
/* Pastikan dropdown menu berada di atas elemen lain */
.dropdown-menu {
    position: absolute;
    top: 100%; /* Memastikan dropdown muncul di bawah tombol */
    left: 0;
    z-index: 1050; /* Menjamin dropdown berada di atas elemen lain */
}

/* Cek padding dan margin untuk memastikan tidak ada yang bertindih */
.nav-item {
    margin-right: 10px; /* Jarak antar item navigasi */
}

.nav-item .dropdown-toggle {
    padding-right: 10px; /* Tambahkan ruang agar dropdown tidak terlalu dekat dengan teks */
}

.auth-buttons {
    margin-left: 20px; /* Memberikan ruang antar elemen header */
}

/* Responsif - Pastikan pada layar kecil elemen tidak saling tumpang tindih */
@media (max-width: 992px) {
    .auth-buttons {
        margin-left: 0;
        margin-top: 10px; /* Memberikan jarak vertikal */
    }
}


</style>
