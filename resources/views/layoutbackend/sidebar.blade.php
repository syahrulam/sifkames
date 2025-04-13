<style>
    /* Membuat sidebar dapat digulir jika kontennya melebihi tinggi */
#sidebar-wrapper {
    max-height: 100vh; /* Membatasi tinggi sidebar */
    overflow-y: auto; /* Menambahkan scroll jika konten melebihi tinggi */
}

/* Memberikan sedikit padding di dalam sidebar agar lebih nyaman */
.sidebar-menu {
    padding: 10px 15px;
}

/* Pastikan submenu juga menggulir jika terlalu panjang */
.sidebar-submenu {
    max-height: 300px; /* Membatasi tinggi submenu */
    overflow-y: auto; /* Menambahkan scroll pada submenu */
}

</style>
<aside id="sidebar-wrapper">
    <div class="sidebar-brand">
        <a href="{{ url('/dashboard') }}">Back Office</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
        <a href="#">BO</a>
    </div>

    <!-- Sidebar Menu -->
    <ul class="sidebar-menu">
        <li class="menu-header">Menu</li>

        <!-- Dashboard Menu -->
        <li class="{{ request()->is('dashboard') ? 'active' : '' }}">
            <a class="nav-link" href="{{ url('/dashboard') }}">
                <i class="fas fa-tachometer-alt"></i> <span>Dashboard</span>
            </a>
        </li>

        <!-- Kegiatan Menu (Dropdown) -->
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#kegiatanMenu" role="button" aria-expanded="false" aria-controls="kegiatanMenu">
                <i class="fas fa-cogs"></i> <span>Kegiatan</span>
            </a>
            <div class="collapse {{ request()->is('admin/gebermas*', 'admin/muslim_medical*', 'admin/dakwah*', 'admin/sarfkam*') ? 'show' : '' }}" id="kegiatanMenu">
                <ul class="sidebar-submenu">
                    <li class="{{ request()->is('admin/gebermas*') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin.gebermas.index') }}">
                            <i class="fas fa-users"></i> Gebermas
                        </a>
                    </li>
                    <li class="{{ request()->is('admin/muslim_medical*') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin.muslim_medical.index') }}">
                            <i class="fas fa-hospital-alt"></i> Muslim Medical
                        </a>
                    </li>
                    <li class="{{ request()->is('admin/dakwah*') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin.dakwah.index') }}">
                            <i class="fas fa-volume-up"></i> Dakwah
                        </a>
                    </li>
                    <li class="{{ request()->is('admin/sarfkam*') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin.sarfkam.index') }}">
                            <i class="fas fa-ambulance"></i> SarFkam
                        </a>
                    </li>
                </ul>
            </div>
        </li>

        <!-- Donasi Menu (Dropdown) -->
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#donasiMenu" role="button" aria-expanded="false" aria-controls="donasiMenu">
                <i class="fas fa-hand-holding-heart"></i> <span>Donasi</span>
            </a>
<div class="collapse {{ request()->is('admin/donasi*') ? 'show' : '' }}" id="donasiMenu">
    <ul class="sidebar-submenu">
        <li class="{{ request()->is('admin/donasi*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin.donasi.index') }}">
                <i class="fas fa-heart"></i> Donasi
            </a>
        </li>
        <li class="{{ request()->is('admin/donasi/index*') ? 'active' : '' }}">
            <a class="nav-link" href="#">
                <i class="fas fa-history"></i> Riwayat Donasi
            </a>
        </li>
        <li class="{{ request()->is('admin/donasi/index*') ? 'active' : '' }}">
            <a class="nav-link" href="#">
                <i class="fas fa-cogs"></i> Kelola Donasi
            </a>
        </li>
    </ul>
</div>
</li>

<!-- Pengaturan Akun Menu -->
<li class="menu-header">Pengaturan Akun</li>
<li class="{{ request()->is('admin/akun*') ? 'active' : '' }}">
    <a class="nav-link" href="#">
        <i class="fas fa-user-cog"></i> <span>Pengaturan Akun</span>
    </a>
</li>

    </ul>
</aside>
