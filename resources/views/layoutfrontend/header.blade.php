<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">
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

        <a class="btn-getstarted" href="{{ url('/about') }}">Get Started</a>
    </div>
</header>
