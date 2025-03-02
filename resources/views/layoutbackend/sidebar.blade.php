<aside id="sidebar-wrapper">
    <div class="sidebar-brand">
        <a href="{{ url('/dashboard') }}">Back Office</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
        <a href="#">BO</a>
    </div>

    <!-- Antrian Menu -->
    <ul class="sidebar-menu">
        <li class="menu-header">a</li>
        <li class=""><a class="nav-link" href="#"><i class="fas fa-list"></i> <span>Dashboard</span></a></li>
        <!-- Menu Gebermas -->
        <li><a class="nav-link" href="{{ route('admin.gebermas.index') }}"><i class="fas fa-list"></i> <span>Gebermas</span></a></li>
    </ul>

</aside>
