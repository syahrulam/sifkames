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

        <!-- Menu Gebermas -->
        <li class="{{ request()->is('admin/gebermas*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin.gebermas.index') }}">
                <i class="fas fa-users"></i> <span>Gebermas</span>
            </a>
        </li>

        <!-- Menu Dakwah -->
        <li class="{{ request()->is('admin/dakwah*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin.dakwah.index') }}">
                <i class="fas fa-volume-up"></i> <span>Dakwah</span>
            </a>
        </li>

        <!-- Menu Muslim Medical -->
        <li class="{{ request()->is('admin/muslim_medical*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin.muslim_medical.index') }}">
                <i class="fas fa-hospital-alt"></i> <span>Muslim Medical</span>
            </a>
        </li>

        <!-- Menu Sarfkam -->
        <li class="{{ request()->is('admin/sarfkam*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin.sarfkam.index') }}">
                <i class="fas fa-clipboard-list"></i> <span>Sarfkam</span>
            </a>
        </li>
    </ul>
</aside>
